<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Loging Form</h2>

<form method="post">

<input type="" name="login"><br>
<input type="" name="email"><br>
<input type="submit" name="submit" value="LOGIN">



</form>



    
</body>
</html>







<?php
//Calling Function
if(isset($_POST['submit'])){
validateForm();
}
//Creating Function
function validateForm(){
$login = $_POST['login'];
$email = $_POST['email'];
$validlogin = 0; //for invalid login name
$validemail = 0; //for invalid email
//Checking Blank Form
if ($login == "" && $email == "") {
echo "<h3 class='empty'>Please Enter Login Name and E-mail first!</h3>";
return 0;
}
//Checking Login Name
if($login==""){
echo "<h3 class='empty'>Please Enter Login Name first!</h3>";
} else if (strlen($login) > 8 || strlen($login) < 4) {
echo "<h3 class='invalid'>Login must be 4 to 8!</h3>";
} else{
$validlogin = 1; //Set login valid
}
//Checking Email
if($email==""){
echo "<h3 class='empty'>Please Enter E-mail first.</h3>";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
echo "<h3 class='invalid'>E-mail is Invalid.</h3>";
} else{
$validemail = 1; //Set email valid
}
//Success Output
if ($validlogin == 1 && $validemail==1) {
echo "<h3 class='validated'>You have successfully logged in.</h3>";
}
}
?>
