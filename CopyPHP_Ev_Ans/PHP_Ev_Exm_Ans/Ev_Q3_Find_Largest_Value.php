
 
<?php 

// <h1> Find largest number</h1>


function largest(){
        $numbers = array(20,30,40,50,70,100);
        $max = 0;
        for($i = 0; $i < count($numbers); $i++){
            if($numbers[$i] > $max){
                $max = $numbers[$i];
            }else{
                $max = $max;
            }
        } return $max;
    }
    echo largest();



?>

</body>
</html>

