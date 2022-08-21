<?php 

echo $ID = $_POST['ID'];
echo "<br>";
echo $name = $_POST['Name'];
echo "<br>";
echo $Designation = $_POST['Designation'];
echo "<br>";
echo $basic = $_POST['Basic'];
echo "<br>";
echo $House_Rent = $_POST['House_Rent'];
echo "<br>";
echo $Transport = $_POST['Transport'];
echo "<br>";
$total = ($basic + $House_Rent + $Transport);

echo $total;

?>