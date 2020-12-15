<?php 
//importing Data
include_once("DB/DataServer.php");

?>
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
    <table>
    <?php 
        $table = GetHijstable();
        foreach ($table as $colname => $colum) {
            echo"<tr>";
            echo "<th>".$colname."</th>";
            if ($colname == "Akkoord") {
                foreach ($colum as $index => $cell) {
                    if ($cell) {
                        echo.'<td><img src="assets/check.svg" alt="checked" width = "10px"></td>';
                    }else{
                        echo."<td></td>";
                    }
                }           
            }else{
                foreach ($colum as $index => $cell) {
                
                    echo."<td>".$cell."</td>";
                }
            }
            echo"</tr>";
        }
        ?> 
    </table>
</div>

<?php
//universal Footer 
include_once("includes/Footer.php");
?>
</body>
</html>