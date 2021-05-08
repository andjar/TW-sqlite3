<?php
include("UUID.php");
$doc = new DOMDocument();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $doc->loadHTMLFile($_FILES['userfile']['tmp_name']);
    //failWithMsg($phpFileUploadErrors[$_FILES['userfile']['error']]);
    
    //$doc->loadHTMLFile("./empty.html");

    $xpath = new DOMXPath($doc);
    $tiddlers = $xpath->query("//div[@title]");


    // Create a new database, if the file doesn't exist and open it for reading/writing.
    // The extension of the file is arbitrary.
    $db = new SQLite3('tiddlywiki.sqlite', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);


    // Create a table.

    $db->query('CREATE TABLE IF NOT EXISTS "tiddlers" (
        "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
        "phpuuid" STRING,
        "status" STRING,
        "user" STRING,
        "Timestamp" DATETIME DEFAULT CURRENT_TIMESTAMP
    )');
    $db->query('CREATE TABLE IF NOT EXISTS "fields" (
        "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
        "phpuuid" STRING,
        "fieldname" STRING,
        "fieldvalue" STRING,
        "status" STRING,
        "Timestamp" DATETIME DEFAULT CURRENT_TIMESTAMP
    )');
    $db->query('CREATE TABLE IF NOT EXISTS "tiddlertext" (
        "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
        "phpuuid" STRING,
        "text" STRING,
        "status" STRING,
        "Timestamp" DATETIME DEFAULT CURRENT_TIMESTAMP
    )');

    $tiddlerlist = array();
    foreach($tiddlers as $tiddler) {
        if(empty($tiddler->getAttribute("sqlsave")) | !strcmp($tiddler->getAttribute("sqlsave"), "no")){
            if($tiddler->hasAttribute("phpuuid")){
                $uuid = $tiddler->getAttribute("phpuuid");
            }else{
                $uuid = UUID::v4();
                $tiddler->setAttribute("phpuuid", $uuid);
            }
            array_push($tiddlerlist, $uuid);

            $newTiddler = $db->querySingle('SELECT EXISTS(SELECT 1 FROM tiddlers WHERE phpuuid="'.$uuid.'" AND status = "ACTIVE" LIMIT 1)');

            if($newTiddler == 0){
                // Add the new tiddler to the tiddler table
                $statement = $db->prepare('INSERT INTO "tiddlers" ("phpuuid", "status") 
                    VALUES (:phpuuid, :status)');
                $statement->bindValue(':phpuuid', $uuid, SQLITE3_TEXT);
                $statement->bindValue(':status', 'NEW', SQLITE3_TEXT);
                $statement->execute();

                // Add the text to the text table
                $statement = $db->prepare('INSERT INTO "tiddlertext" ("phpuuid", "text", "status") 
                    VALUES (:phpuuid, :text, :status)');
                $statement->bindValue(':phpuuid', $uuid);
                $statement->bindValue(':text', $tiddler->getElementsByTagName('pre')->item(0)->nodeValue);
                $statement->bindValue(':status', 'ACTIVE');
                $statement->execute();

                // Add other fields to the fields table
                foreach ($tiddler->attributes as $field){
                    $statement = $db->prepare('INSERT INTO "fields" ("phpuuid", "fieldname", "fieldvalue", "status") 
                        VALUES (:phpuuid, :fieldname, :fieldvalue, :status)');
                    $statement->bindValue(':phpuuid', $uuid, SQLITE3_TEXT);
                    $statement->bindValue(':fieldname', $field->nodeName, SQLITE3_TEXT);
                    $statement->bindValue(':fieldvalue', $field->nodeValue, SQLITE3_TEXT);
                    $statement->bindValue(':status', 'ACTIVE', SQLITE3_TEXT);
                    $statement->execute();
                }
            }else{
                // Check if text is changed
                $oldText = $db->querySingle('SELECT text FROM tiddlertext WHERE phpuuid="'.$uuid.'" AND status = "ACTIVE" LIMIT 1');
                $newText = $tiddler->getElementsByTagName('pre')->item(0)->nodeValue;
                if(strcmp($oldText, $newText) !== 0 ){
                    // The text has been changed
                    $db->prepare('UPDATE tiddlertext SET status = "OUTDATED" WHERE phpuuid="'.$uuid.'" AND status = "ACTIVE"')->execute();
                    $statement = $db->prepare('INSERT INTO "tiddlertext" ("phpuuid", "text", "status") 
                    VALUES (:phpuuid, :text, :status)');
                    $statement->bindValue(':phpuuid', $uuid);
                    $statement->bindValue(':text', $newText);
                    $statement->bindValue(':status', 'ACTIVE');
                    $statement->execute();
                }

                $tiddlerFieldNames = array();
                $tiddlerFieldValues = array();
                foreach ($tiddler->attributes as $field){
                    array_push($tiddlerFieldNames, $field->nodeName);
                    array_push($tiddlerFieldValues, $field->nodeValue);
                }

                // Check if fields are changed or deleted
                $statement = $db->prepare('SELECT * FROM fields WHERE phpuuid="'.$uuid.'" AND status = "ACTIVE"');
                $activeFields = $statement->execute();
                $fieldslist = array();

                while ($field = $activeFields->fetchArray()){
                    array_push($fieldslist, $field["fieldname"]);
                    $key = array_search($field["fieldname"], $tiddlerFieldNames);

                    if($key !== false){
                        if(strcmp($field["fieldvalue"], $tiddlerFieldValues[$key]) !== 0 ){
                            // The field has been changed
                            $db->prepare('UPDATE fields SET status = "OUTDATED"
                                WHERE
                                    phpuuid   = "'.$uuid.'" AND
                                    status    = "ACTIVE" AND
                                    fieldname = "'.$field["fieldname"].'"')->execute();
                            $statement = $db->prepare('INSERT INTO fields ("phpuuid", "fieldname", "fieldvalue", "status") 
                            VALUES (:phpuuid, :fieldname, :fieldvalue, :status)');
                            $statement->bindValue(':phpuuid', $uuid);
                            $statement->bindValue(':fieldname', $tiddlerFieldNames[$key]);
                            $statement->bindValue(':fieldvalue', $tiddlerFieldValues[$key]);
                            $statement->bindValue(':status', 'ACTIVE');
                            $statement->execute();
                        }
                    }else{
                        // The field has been deleted
                        $db->prepare('UPDATE fields SET status = "DELETED" 
                            WHERE
                                status = "ACTIVE" AND
                                phpuuid="'.$uuid.'" AND
                                fieldname="'.$field["fieldname"].'"')->execute();
                    }
                }

                // Add new fields (if any)
                $newFields = array_keys(array_diff($tiddlerFieldNames, $fieldslist));
                if(!empty($newFields)){
                    foreach($newFields as $newField){
                        $statement = $db->prepare('INSERT INTO fields ("phpuuid", "fieldname", "fieldvalue", "status") 
                            VALUES (:phpuuid, :fieldname, :fieldvalue, :status)');
                        $statement->bindValue(':phpuuid', $uuid, SQLITE3_TEXT);
                        $statement->bindValue(':fieldname', $tiddlerFieldNames[$newField], SQLITE3_TEXT);
                        $statement->bindValue(':fieldvalue', $tiddlerFieldValues[$newField], SQLITE3_TEXT);
                        $statement->bindValue(':status', 'ACTIVE', SQLITE3_TEXT);
                        $statement->execute();
                    }
                }
            }
            
            if($tiddler->hasAttribute("user") != FALSE){
                $db->prepare('UPDATE tiddlers SET user = "'. $tiddler->getAttribute("user") .'" 
                            WHERE
                                status = "ACTIVE" AND
                                phpuuid="'.$uuid.'"')->execute();
            }
        }
    }

        // Find deleted tiddlers
        $statement = $db->prepare('UPDATE tiddlers SET status  = "DELETED" WHERE status = "ACTIVE" AND phpuuid NOT IN ("'.implode('","',$tiddlerlist).'");')->execute();
        $statement = $db->prepare('UPDATE tiddlers SET status = "ACTIVE" WHERE status = "NEW"')->execute();
    }else{
        //$doc->loadHTML(file_get_contents("./empty.html"));
        //failWithMsg('POST Failed');
    }
?>