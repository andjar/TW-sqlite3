# TW-sqlite3
SQLite3 backbone for TiddlyWiki. Add the files to a folder running a PHP server. You may have to go to Configuration -> Saving -> TW-receiver and add something to the password field (not important what).

## Features

* The tiddlers live inside the SQLite3 database
* Use URL parameters
  * URL parameters can now be found in $:/url
  * Eg. ?test=Hi will create a tiddler "$:/url/test" with text "Hi"
  * These have the field sqlsave set to "no" and are not saved
* ?user=username will only give public tiddlers or tiddlers with field "user" containing the username
* All edits are saved in the database
  * Deleted tiddlers
  * Older versions of the text/fields
