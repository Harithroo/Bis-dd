<?php
// seperate database frome code
require("credentials.php");
function dbconnect() {
$database=new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
validate_connection($database);
return $database;
}
function validate_connection($database) {
    if ($database->connect_errno==0){
    }
    if ($database->connect_errno>0){
        $msg="database connection failed: <br>";
        $msg.=$database->connect_error;
        // $msg = "database connection failed: ".$database->connect_error;
        echo $msg;
        echo "<br>";
    }
}
?>