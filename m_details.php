
<?php
$pageTitle="IoT-HWMS-Monitor IoT Smart Meter";
$title="IoT Household water management ";
include 'header.php';
$errormessage="";
$successmessage="";
$status = "";

$statusArray = array(0 => 'Active', 1 =>'Locked');
include 'dbconnectPDO.php';
if (isset($_GET['mid'])){
    $mid = $_GET['mid'];
    $sql = "SELECT * FROM `device` WHERE `device_number` = '{$mid}'";
    $query = $connPDO->query($sql);
    $row = $query->fetch(PDO::FETCH_ASSOC);
    if ($row['quantity'] > 0){
        $status = 'Active';
    } else{
        $status = 'Locked';
    }
} else {
    header('location: ./monitor_device.php');
}
?>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="card m-b-30">
            <div class="card-body">

                <div class="table-rep-plugin">
                    <div class="table-responsive b-0" data-pattern="priority-columns">
                        <h6>Device Information</h6>
                        <a href="./monitor_device.php" class="btn btn-outline-info" style="float: right;"><i class="mdi mdi-chevron-double-left"></i> Back To List</a>
                        <table id="tech-companies-1" class="table  table-striped">
                            <tr>
                                <th>Owner Names:</th>
                                <td><?=$row['owner_name'];?></td>
                            </tr>
                            <tr>
                                <th>Meter Number:</th>
                                <td><?=$row['device_number'];?></td>
                            </tr>

                            <tr>
                                <th>NID:</th>
                                <td><?=$row['nid'];?></td>
                            </tr>
                            <tr>
                                <th>Phone:</th>
                                <td><?=$row['telephone'];?></td>
                            </tr>
                            <tr>
                                <th>Quantity used:</th>
                                <td><?=$row['quantity']." liters";?></td>
                            </tr>
                            <tr>
                                <th>Status:</th>
                                <td><?=$status;?></td>
                            </tr>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div> <!-- end col -->
    <div class="col-md-3"></div>
</div> <!-- end row -->


<?php
include 'footer.php';
?>
