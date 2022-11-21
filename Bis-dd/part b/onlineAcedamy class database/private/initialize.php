<?php
//create the database function
require("database_functions.php");
require("class_Tutors.php");
$db=dbconnect();
Tutor::set_database($db);
?>