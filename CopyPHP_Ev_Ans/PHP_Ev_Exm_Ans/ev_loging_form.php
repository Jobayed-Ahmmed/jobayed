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

// if(isset($_POST["submit"])){}

 if($_SERVER['REQUEST_METHOD']=='POST'){

$login  = $_POST['login'];
$email  = $_POST['email'];

 if(strlen($login)>8 || strlen($login)<4){ 
echo "Invalid<br>";

 } else {

    echo "valid<br>";
 }

 if(filter_var($email,FILTER_VALIDATE_EMAIL)){ 
    echo "valid<br>";
    
     } else {
    
        echo "Invalid<br>";
     }

 }

?>

<h2>Loging Form</h2>

<form method="post">

<input type="" name="login"><br>
<input type="" name="email"><br>
<input type="submit" name="submit" value="LOGIN">



</form>

    
</body>
</html>