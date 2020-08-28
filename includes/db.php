<?php 


//This is possible however bit cumbersome.
// $db['db_host'] = 'localhost';
// $db['db_user'] = 'root';
// $db['db_pass'] = '';
// $db['db_table'] = 'cms';

// foreach($db as $key => $value){

//     define(strtoupper($key),  $value);
// }

//Constants
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", '');
define("DB_TABLE", "cms");

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_TABLE);

// if($connection){
//     echo "Connection established.";
// }

// else {
//     echo "Error connecting to database.";
// }

?>