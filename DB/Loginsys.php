<?php

function CheckLogin($LoginToken){
    $token = explode(",",$_COOKIE["authtoken"] );
    //$token[0];//id
    
    //$token[1];//password hash
    
}
function Login($Username,$Password){
include_once("db.php");
$dbsql = new mysqli($db["host"], $db["username"],$db["password"],$db["db"]);
if($dbsql->connect_errno ){
    echo    "sorry, couldn't connect to database";
    echo "Error: Failed to make a MySQL connection, here is why: \n";
    echo "Errno: " . $dbsql->connect_errno . "\n";
    echo "Error: " . $dbsql->connect_error . "\n";
    exit;
}
$sql = "SELECT `id`,`Password` FROM `users` WHERE Username='%s' AND Password='%s' LIMIT 1";
$result = $dbsql->query(sprintf($sql,$dbsql -> real_escape_string($Username),$dbsql -> real_escape_string(hash('sha256',$Password))));
if($result->num_rows > 0) {
    $row = $result->fetch_assoc();
        return array( strval($row["id"]),$row["Password"]);
    
        
  
}else {
        echo "Error: " . $dbsql->error . "\n";
        echo sprintf($sql,$dbsql -> real_escape_string($Username),$dbsql -> real_escape_string(hash('sha256',$Password)));
    
}
$dbsql->close();
}
?>