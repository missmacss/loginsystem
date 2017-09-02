<?php
//$DB_HOST = 'localhost';
//$DB_USER = 'root';
//$DB_PASS = 'root';
//$DB_NAME = 'login';
//$DB_PORT = '8889';

$DB_HOST = 'macsstudio.dk.mysql';
$DB_USER = 'macsstudio_dk';
$DB_PASS = 'goprosurf';
$DB_NAME = 'macsstudio_dk';


$link = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT);
//$link = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT);
if ($link->connect_error) { 
   die('Connect Error ('.$link->connect_errno.') '.$link->connect_error);
}
$link->set_charset('utf8'); 
?>
