<?php
include_once ("conf/conf.php");


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
switch (basename($_SERVER['PHP_SELF'],'.php')) {
    case 'value':
?>

<?php
        break;
    default:
?>  

<?php  break;
}
?>
</head>
