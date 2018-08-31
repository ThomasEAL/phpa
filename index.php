<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Min forside</title>
    </head>
    <body>
        <form action="login.php" method="post">
            Indtast dit bruger navn: <input type="text" name="brugernavn"> </br>
            Indtast dit password: <input type="text" name="kodeord"> </br>
            Angiv fødselsdag : 
            <?php
                $mdrnames=array('','jan','feb','mar','apr','maj','jumi','jul','aug','sep','okt','nov','dec'); 
                makeDropdownWArray(1,12,'mdr',$mdrnames);
                $mdrnames=array('','hest','ko','lo','bo','maj','jumi','jul','aug','sep','okt','nov','dec'); 
                makeDropdownWArray(1,12,'mdr',$mdrnames);


                makeDropdown(1,31,'day');
                makeDropdown(1950,2017,'year');
            ?>
            </br>
            <input type="submit">
            
        </form>    
        
        
        
        
        
        <?php
         // put your code here
         
        ?>
    </body>
</html>


<?php  
function makeDropdown($start,$end,$selectName){
   
    
    echo "<select name='$selectName'>";
            echo "<option >$selectName </option>";
            for($counter=$start;$counter<=$end;$counter++){
               echo "<option value='$counter'>$counter</option> "; 
            
             }
            echo "</select>";
    
}

function makeDropdownWArray($start,$end,$selectName,$mdrnames){
    
    
    echo "<select name='$selectName'>";
            echo "<option >$selectName </option>";
            for($counter=$start;$counter<=$end;$counter++){
               echo "<option value='$counter'>$mdrnames[$counter]</option> "; 
            
             }
            echo "</select>";
    
}


?>















