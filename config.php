<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'sql107.epizy.com'); //localhost
define('DB_USERNAME', 'epiz_29308287'); //root
define('DB_PASSWORD', 'iM4CWHDHnapu'); //""
define('DB_NAME', 'epiz_29308287_register'); //register
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>