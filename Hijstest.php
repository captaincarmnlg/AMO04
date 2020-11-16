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
    <table class="fixed_header">
        <thead> 
            <tr>
                <th>Col 1</th>
                <th>Col 2</th>
                <th>Col 3</th>
                <th>Col 4</th>
                <th>Col 5</th>
            </tr>
        </thead>
        <tbody>
        <?php  ?>
            <tr>
                <td>test  </td>
                <td>test  </td>
                <td>test  </td>
                <td>test  </td>
                <td>test  </td>
            </tr>
        </tbody>
        <tfoot> 
        </tfoot>
    </table>
</div>

<?php
//universal Footer 
include_once("includes/Footer.php");
?>
</body>
</html>