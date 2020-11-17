<!DOCTYPE html>
<html>  
<?php 
//universal head
include_once("includes/Head.php");
?>
<body>
<?php 
//universal navbar
include_once("includes/Header.php");
?>
<div class = "Content_Container">
<form action="" class="Login_Form">
<input id="Mail" type="text" name="Mail" placeholder="E-mail">
<br>    
<input id="Password" type="password" name="Password" placeholder="Password">
<br>

</form>
<button id="Login" class="LoginBtn" onclick="onloginbtn()">Login</button>
</div>

<?php
//universal Footer 
include_once("includes/Footer.php");
?>
</body>
</html>