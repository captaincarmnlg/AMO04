<?php

function CheckLogin($LoginToken){
    include_once( "db.php");
    $token = explode(",",$LoginToken);
    $dbsql = new mysqli($db["host"], $db["username"],$db["password"],$db["db"]);
    $sql = "SELECT CAST(CASE WHEN COUNT(*) > 0 THEN 1 ELSE 0 END as int)as tf FROM users WHERE `id` = %s AND `Password` = '%s'";
    

    if ($dbsql->connect_errno) {
        echo    "sorry, couldn't connect to database";
        echo "Error: Failed to make a MySQL connection, here is why: \n";
        echo "Errno: " . $dbsql->connect_errno . "\n";
        echo "Error: " . $dbsql->connect_error . "\n";
    exit;
    }
    $result = $dbsql->query(sprintf($sql,$dbsql -> real_escape_string($token[0]),$dbsql -> real_escape_string($token[1]) ));
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
            
            return ($row["tf"]!=0);
            
        
            
      
    }else {
            echo "Error: " . $dbsql->error . "\n";
            echo sprintf($sql,$dbsql -> real_escape_string($token[0]),$dbsql -> real_escape_string($token[1]) );
        
    }
    $dbsql->close();


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