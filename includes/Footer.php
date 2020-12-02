<footer class="Footer">
<?php
switch (basename($_SERVER['PHP_SELF'],'.php')) {
    case 'index':
        
        break;
    
    default:
    ?>
    <script src="js/LogoutHandeler.js"></script>
    <div class="Exit_Btn">
        <button onClick="logout()">
            <h1>Exit</h1>
        </button>
    </div>
       <?php 
        break;
}
?>
</footer>