<?php
include "./dbconnect.php";
arduinorequest();
function arduinorequest()
{
    global $conn;
    $id="WASAC87LX01";
    //$sql = "SELECT * FROM `device` where 'device_number  ";
    $sql = "SELECT * FROM `device` where `device_number`='$id'";
//$sql="UPDATE `quantity` SET `current_quantity`=$water_quantity  where `device_number`='$meter_number'";
    $result = $conn -> query($sql);
    //if($result->num_rows > 0)
    if (!empty($result) && $result->num_rows > 0)
    {
       while( $row=$result->fetch_assoc()) {
           $exit_quantity = $row['quantity'];
           $devicenumber=$row['device_number'];
           echo $exit_quantity."<br>" ;
       }


    }
}
?>
