<?php
require_once('class_database.php');
class Tutor extends Database
{
    static public $table_name="tutors";
    static protected $db_columns = ['ID', 'Name', 'Email', 'Phone_number', 'Qualifications', 'Subjects_to_teach', 'Rate_per_hour'];
    
    public $ID;
    public $Name;
    public $Email;
    public $Phone_number;
    public $Qualifications;
    public $Subjects_to_teach;
    public $Rate_per_hour;

}
?>