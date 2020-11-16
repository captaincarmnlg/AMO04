<?php
include_once ("conf/conf.php");
include_once ("DB/Loginsys.php"); 

?>
<head>  
<meta charset="UTF-8">
<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="IE=7">
<meta name="keywords" content="HTML, CSS, JavaScript, PHP, AMO04">
<meta name="author" content="Nick Klaver">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href=<?php echo  $conf["docroot"]."/assets/kraan.png"?> type="image/gif" >
<link rel="stylesheet" href=<?php echo  $conf["docroot"]."/css/base.css"?> >
<title>  
<?php
basename($_SERVER['PHP_SELF'])
?>
</title>

<?php
if (basename($_SERVER['PHP_SELF'],'.php')!="index") {
    if (isset($_COOKIE["authtoken"])) {
   
        if (!CheckLogin($_COOKIE["authtoken"])) {
            echo  "<meta http-equiv = 'refresh' content = '0; url = ".$conf["docroot"] ."' />";
        } 
    }else {
        echo  "<meta http-equiv = 'refresh' content = '0; url = ".$conf["docroot"] ."' />";  
    }
}


switch (basename($_SERVER['PHP_SELF'],'.php')) {
    case 'index':
?>
    <script src="js/LoginHandeler.js"></script>
<?php
        break;
    case 'Hijstest':
//login valid

?>
<script src="js/HijstestHandeler.js"></script>
<link rel="stylesheet" href="css/Hijstest.css">
<?php
    default:
?>  

<?php  break;
}
?>
</head>
