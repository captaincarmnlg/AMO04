<?php include_once ("conf/conf.php");?>

<div class="Logo_Container">   
<a href=<?php echo $conf["docroot"] ?>><img src="assets/kraan.png" alt="logo over de rein" width="100%" height="100%"></a>
</div>
<div class="Screen_Name_Container">   
<h1>
<?php
echo basename($_SERVER['PHP_SELF'],".php")
?>
</h1>
</div>
<div class="NavBar">
<?php


switch (basename($_SERVER['PHP_SELF'],'.php')) {
    case 'value':
        
        break;
    
    default:
        
        break;
}

?>
</div>