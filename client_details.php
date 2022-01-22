<?php

ob_start();
session_start();
$telephone="+25".$_SESSION['phone'];
$paydue=0.4*$_SESSION['quantity'];
$message=" Dear ".$_SESSION['name']."Your meter (".$_SESSION['meter'].") consumed ". $_SESSION['quantity']."Liters, you pay".$paydue."Frws to clear the debt";
client_message($telephone,$message);

?>

<?php
function client_message($telephone,$message)
{
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

    }

}
?>
