
<?php
include "./dbconnect.php";
include "Meter_code.php";
$meterid = "WASAC".random_string();
$message="Data not inseted";
$successmessage="New records inserted successfully";
// recieve data from the form
$fname=$_POST["fname"];$lname=$_POST["lname"];$nid=$_POST["nid"];$telephone='+25'.$_POST["telephone"];
// insert data
$Sql="INSERT INTO `device` ( `device_number`, `owner_name`, `nid`, `telephone`,`quantity`)
VALUES ('$meterid', '$fname', $nid, '$telephone', 0)";
$message = "Dear ".$fname.", You are successfully registered with meter number ".$meterid;

if ($conn->query($Sql)) {
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.mista.io/sms',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('to' => $telephone,'from' =>'ACEIoT_Gil','unicode' =>'0','sms'=>$message,'action'=>'send-sms'),
        CURLOPT_HTTPHEADER => array('x-api-key:95d0f70d-403e-909c-804c-48ea4b6045b9-c6f23402'
        ),
    ));

    $response = curl_exec($curl);
    if ($response){
        curl_close($curl);
        ?>
        <script>
            window.alert('New meter number created successfully, click \'OK\' close the window ');
            window.location = 'm_details.php?mid=<?=$meterid;?>';
        </script>
        <?php
    }
}
else {
    echo "<p style='color: #b21f2d'>".$errormessage.$conn->error."</p><br>";
}

?>




