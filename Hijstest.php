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
    <div class="TableHead">
        <div class="tableheadrow" >
            <div class="ColnameHead"><p> Datum </p></div>
            <div class="ColnameHead"><p> Hoofdgiek_L </p></div>
            <div class="ColnameHead"><p> Mech_Sectie_GL </p></div>
            <div class="ColnameHead"><p> Hulpgiek_L </p></div>
            <div class="ColnameHead"><p> Hoofdgiek_H </p></div>
            <div class="ColnameHead"><p> Hulpgiek_H </p></div>
            <div class="ColnameHead"><p> Hijskabel_P </p></div>
            <div class="ColnameHead"><p> zwenkhoek </p></div>
            <div class="ColnameHead"><p> Eigen_Massa </p></div>
            <div class="ColnameHead"><p> Toelaatbare_Last </p></div>
            <div class="ColnameHead"><p> LMB_in_werking </p></div>
            <div class="ColnameHead"><p> Proeflast </p></div>
            <div class="ColnameHead"><p> Akkoord </p></div>
        </div>
    </div>
    <div class="TableBoddy">
       
            <?php 
                $test[0]["Datum_opgesteld"] = "11-11-2020";
                $test[0]["Hoofdgiek_Lengte"] = "11m";
                $test[0]["Mech_Sectie_Gieklengte"] = "11m";
                $test[0]["Hulpgiek_Lengte"] = "11m";
                
                $test[1]["Datum_opgesteld"] = "17-11-2020";
                $test[1]["Hoofdgiek_Lengte"] = "17m";
                $test[1]["Mech_Sectie_Gieklengte"] = "17m";
                $test[1]["Hulpgiek_Lengte"] = "17m";

                foreach ($test as  $row) {
                    echo "<div class='tablerow'>";
                    foreach ($row as $key => $cell) {
                    
                        echo "<div class='Colname' id='{$key}'><p> {$cell} </p></div>";
                    
                    }

                    echo "</div>";
                }
               
            
            ?>
        
    </div>
    
</div>

<?php
//universal Footer 
include_once("includes/Footer.php");
?>
</body>
</html>