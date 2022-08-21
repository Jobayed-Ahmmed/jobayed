<?php
    if(isset($_POST['submit'])) {
     
    $mynum = $_POST['mynum'];
    
    
        if ($mynum%2==0) {
            echo "<div> $mynum is the number even </div>"; 
        }
        else {
            echo "<div> $mynum is the number odd </div>"; 
        }           
     
}   
?>
 
<form method="post" action="">
    <p><input type="text" name="mynum" placeholder="Put a Number"></p>
    <input type="submit" name="submit" value="Odd/Even Numbers">
     
</form>