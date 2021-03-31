<?php
function connect(){
    $host = "localhost";
    // $dbName = "id12986222_lucsi";
    // $usename = "id12986222_lucsiname";
    // $password= "";
    $dbName = "lucsi";
    $usename = "root";
    $password= "";
    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
    $DBH = new PDO("mysql:host=$host;dbname=$dbName",$usename,$password,$options);
    return $DBH;
}
?>