<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

if(isset($_POST['submit'])){

$grade = $_POST['grade'];

grade($grade);

}

function grade($grade){
    if($grade>=90){
        echo "A+";
    }else if($grade>=80){

        echo "A";
    }else if($grade>=70){

        echo "A-";
    }else {
        echo "F";
    }
    
}

?>

<form action="" method="post">

<input type="text"name="grade"  placeholder="Enter any grade"><br>
<input type="submit"name="submit" value="Check">

</form>


</body>
</html>