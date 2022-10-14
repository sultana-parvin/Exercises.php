<?php

echo "adresse client va ici";

$name=$_POST["name"];
$address = $_POST["address"];
$city = $_POST["city"];
$zipcode = $_POST["zipcode"];


?>

<table>
<thead>
    <td>Name</td>
    <td>Adress</td>
    <td>City</td>
    <td>Zipcode</td>
</thead>
    <tbody>
           
        <td><?php echo $name ?></td>
         
         <td><?php echo $address ?></td>

         <td><?php echo $city ?></td>
        
         <td><?php echo $zipcode ?></td>
        
    </tbody>
</table>


