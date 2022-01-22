<?php
include "./dbconnect.php";
$meter_number = $_POST['meter_number'];

function arduinorequest()
{
$sql = "SELECT * FROM `device` where 'device_number'='$meter_number'";
//$sql="UPDATE `quantity` SET `current_quantity`=$water_quantity  where `device_number`='$meter_number'";
$result = $mysqli -> query($sql);
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc()) {
        $exit_quantity = $row['quantity'];

        echo $exit_quantity ;
  }
  }} 
?>
