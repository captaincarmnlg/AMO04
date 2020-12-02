<?php
function GetHijstable(){
    include("db.php");
    $dbsql = new mysqli($db["host"], $db["username"],$db["password"],$db["db"]);
    $sql = "SELECT * FROM `hijstesten`";
    $result = $dbsql->query($sql);
    if($result->num_rows > 0) {
        //initialize variable's
        $i=0;
        $cols = [];
        //while loop dbrows
        while($row = $result->fetch_assoc()) {
            
            foreach ($row as $key => $value) {
                //insert data into a multidimentional array 
                $cols[$key][$i]=$value;
            }
            $i++;
        }
    }
    return $cols;
}










?>