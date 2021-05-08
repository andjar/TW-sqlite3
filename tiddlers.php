<?php

    if (isset($_GET['user'])) {
        $user = $_GET['user'];
    } else {
        $user = "na";
    }

    $db = new SQLite3('tiddlywiki.sqlite', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
    $doc = new DOMDocument;

    $statement = $db->prepare('SELECT phpuuid FROM tiddlers WHERE status = "ACTIVE" AND (user LIKE "%' . $user . '%" OR user IS NULL);');
    $activeTiddlers = $statement->execute();

    while ($tiddler = $activeTiddlers->fetchArray()) {
        
        // Create tiddler
        $node = $doc->createElement("div");
        $node->setAttribute("phpuuid", $tiddler["phpuuid"]);
        
        // Add text
        $tiddlerText = $db->querySingle('SELECT text FROM tiddlertext WHERE phpuuid="'.$tiddler["phpuuid"].'" AND status = "ACTIVE" LIMIT 1');
        
        $txt = $doc->createElement("pre", htmlspecialchars($tiddlerText));
        $node->appendChild($txt);
        
        // Add fields
        $statement = $db->prepare('SELECT * FROM fields WHERE phpuuid="'.$tiddler["phpuuid"].'" AND status = "ACTIVE";');
        $activeFields = $statement->execute();
        while ($field = $activeFields->fetchArray()){
             $node->setAttribute($field["fieldname"], $field["fieldvalue"]);
        }
        
        $doc->appendChild($node);
    }

    // Add tiddler with url arguments
    foreach($_GET as $urlvar => $urlvalue){
        $node = $doc->createElement("div");
        $tidtit = "$:/url/" . $urlvar;
        $node->setAttribute("title", htmlspecialchars($tidtit));
        $node->setAttribute("sqlsave", "no");
        $txt = $doc->createElement("pre", htmlspecialchars($urlvalue));
        $node->appendChild($txt);
        $doc->appendChild($node);
    }

    echo $doc->saveHTML();

?>