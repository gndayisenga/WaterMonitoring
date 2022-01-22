<?php
include "./dbconnect.php";
$successmessage="server updated";
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"])){
    switch ($_POST['action']) {
        case 'insertRecord':
            updateServer();
            break;
        default:
            break;
    }
}
function arduinorequest($id)
{
    global $conn;
    //$id="WASAC87LX01";
    //$sql = "SELECT * FROM `device` where 'device_number  ";
    $sql = "SELECT * FROM `device` where `device_number`='$id'";
//$sql="UPDATE `quantity` SET `current_quantity`=$water_quantity  where `device_number`='$meter_number'";
    $result = $conn -> query($sql);
    //if($result->num_rows > 0)
    if (!empty($result) && $result->num_rows > 0)
    {
        while( $row=$result->fetch_assoc()) {
            $exit_quantity = $row['quantity'];
            return $exit_quantity;
        }


    }
}
function updateServer()
{
    global $conn;
    $water_quantity = $_POST['quantity'];
    $meter_number = $_POST['meter_id'];

    $prev_quantity = arduinorequest($meter_number);
    $new_quantity = $water_quantity + $prev_quantity;

    echo $successmessage."  " . $new_quantity . "        ";
    //echo "                ";
    //echo $water_quantity;
    //$sql = "INSERT INTO `quantity`(`device_number`, `current_quantity`) VALUES ('$meter_number','$water_quantity')";
    $sql="UPDATE `device` SET `quantity`= '$new_quantity'  where `device_number`='$meter_number'";

    $conn->query($sql);
}
  ?>

