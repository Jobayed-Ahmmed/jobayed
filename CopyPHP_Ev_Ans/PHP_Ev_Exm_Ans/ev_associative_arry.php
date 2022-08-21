
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    
</body>
</html>



<?php

$Country = array(
    "Bangladesh"=>"Dhaka",
    "India"=>"New Dillhi",
    "Pakistan"=>"Islamabad",
    "England"=>"London",
    "USA"=>"Washingtong"
);

// echo "<pre>";

//  asort($Country);
 ksort($Country);


// print_r($Country);

?>

<table border="1">

<tr>
    <th>Country Name</th>
    <th>Capital</th>
</tr>

<?php
foreach($Country as $Countr=>$cont){ ?>

<tr>
    <td><?php echo $Countr ?></td>
    <td><?php echo $cont ?></td>
</tr>

<?php
    
}

?>

</table>



