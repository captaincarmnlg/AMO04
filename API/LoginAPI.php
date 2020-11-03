<?php
header("Content-Type: application/json; charset=UTF-8");
echo "{ 'UserName':'".$_POST["Username"]."',";
echo "'password':'".$_POST["Password"]."'}";


?>