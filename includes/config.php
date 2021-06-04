<?php 
// DB credentials.
define('DB_HOST','db5002638726.hosting-data.io');
define('DB_USER','dbu1225471');
define('DB_PASS','P1louP@pou888');
define('DB_NAME','dbs2097221');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>