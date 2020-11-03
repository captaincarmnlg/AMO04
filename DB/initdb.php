<?php
include_once("db.php");
$dbsql = new mysqli($db["host"], $db["username"],$db["password"]);
if($dbsql->connect_errno ){
    echo    "sorry, couldn't connect to sql server";
    echo "Error: Failed to make a MySQL connection, here is why: \n";
    echo "Errno: " . $dbsql->connect_errno . "\n";
    echo "Error: " . $dbsql->connect_error . "\n";
    exit;
}
$sql = "CREATE DATABASE ".$db["db"];


if($dbsql->query($sql)===true){
    echo "Database created successfully";

}else {
    echo "Error: " . $dbsql->error . "\n";

}

$dbsql = new mysqli($db["host"], $db["username"],$db["password"],$db["db"]);
if($dbsql->connect_errno ){
    echo    "sorry, couldn't connect to database";
    echo "Error: Failed to make a MySQL connection, here is why: \n";
    echo "Errno: " . $dbsql->connect_errno . "\n";
    echo "Error: " . $dbsql->connect_error . "\n";
    exit;
}
$sqltq[0] = "";
$sqltq[1] = "";

foreach ($sqltq as $value) {
    if($dbsql->query($value)===true){
        echo "Table created successfully";
    
    }else {
        echo "Error: " . $dbsql->error . "\n";
    
    }
}
$dbsql->close();
?>