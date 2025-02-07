<?php
///////////////////////////////
//DESKTOP-32RL6R4\SQLEXPRESSc
$dsn = "mysql:host=localhost;dbname=u555873047_mudrk";
$user = "u555873047_mudrk";
$password = "Mudrk@2025";
// $user = "u555873047_mudrk";
// $password = "Mudrk.net2025";
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8mb4",   // arabic  ==> utf8
);

// utf8mb4
/* 
'char_set' => 'utf8mb4',
    'dbcollat' => 'utf8mb4_unicode_ci',
*/

header("Access-Control-Allow-Origin: *"); 
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With, Access-Control-Allow-Origin");
header("Access-Control-Allow-Methods: POST, OPTIONS, GET");

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    exit(0);
}

try {
    $connect = new PDO($dsn, $user , $password , $option );
    $connect->setAttribute(PDO::ATTR_ERRMODE , PDO:: ERRMODE_EXCEPTION );
    //for security
    include "function.php";
    $key = "secret_key_example";

    // checkAuthenticate();

} catch (PDOException $e) {
    echo $e->getMessage();
}
?>