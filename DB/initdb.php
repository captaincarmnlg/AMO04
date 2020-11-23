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
$sqltq[0] = "CREATE TABLE Users(
id INT(25) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Email VARCHAR(255) NOT NULL,
FirstName VARCHAR(255) NOT NULL,
MiddleName VARCHAR(255) NOT NULL,
SecondName VARCHAR(255) NOT NULL,
Password VARCHAR(255) NOT NULL,
last_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
CONSTRAINT passuser UNIQUE (EMail,Password)
)
";
/*$sqltq[1] = "CREATE TABLE Hijstest(
ID INT(25) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Opdrachtnummer ,
Akkoord BOOL NOT NULL
)
";*/

foreach ($sqltq as $value) {
    if($dbsql->query($value)===true){
        echo "Table created successfully";
    
    }else {
        echo "Error: " . $dbsql->error . "\n";
    
    }
}
$dbsql->close();
?>