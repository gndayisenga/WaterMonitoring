<?php
$pageTitle="Recorord saved successfully";
$errormessage="Record not inserted  Error: ";
$successmessage="Record inserted";
include "dbconnect.php";
include "header.php";

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];
$username=$_POST['username'];
$role=$_POST['user_role'];
$Sql="INSERT INTO `admin`(`admin_first_name`, `admin_last_name`, `admin_telephone`, `admin_email`, `admin_role`, `admin_username`) 
VALUES ('$firstname','$lastname','$telephone','$email','$role','$username')";

$conn->query($Sql);

include "form_user.php";

?>

<?php
include "footer.php";
?>
