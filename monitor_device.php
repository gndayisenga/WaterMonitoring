
<?php
$pageTitle="IoT-HWMS-Monitor IoT Smart Meter";
$title="IoT Household water management ";
include 'header.php';
include "./dbconnect.php";
$errormessage="";
$successmessage="";

?>
<div class="row">
    <div class="col-md-12">
        <div class="card m-b-30">
            <div class="card-body">

                <div class="table-rep-plugin">
                    <div class="table-responsive b-0" data-pattern="priority-columns">
                        <table id="tech-companies-1" class="table  table-striped">
                            <thead>
                            <h6>device status</h6>
                            <tr>

                                <th>Meter number</th>
                                <th>Owner names</th>
                                <th>Quantity</th>
                                <th>Status</th>
                                <th>Details</th>

                            </tr>
                            </thead>
                             <?php

                     // $mysqli = new mysqli("localhost","root","","iot_water");

                     if ($conn -> connect_errno) {
                      echo "Failed to connect to MySQL: " . $conn -> connect_error;
                     exit();
                     }

                   //$sql = "SELECT * FROM `device` order by Device_id desc limit 3";
                     $sql = "SELECT * FROM `device`";
                    $result = $conn -> query($sql);
                    // Associative arra
                             if($result->num_rows>0)
                             {
                                 while($row=$result->fetch_assoc())
                                 {
                                   $meternumber=  $row['device_number'];
                                   $name=$row['owner_name'];
                                   $id=$row['nid'];
                                   $telephone= $row['telephone'];

                                   $status=$row['status'];
                                   $level=$row['quantity'];; // default  value

                                   if($level>0)
                                   {
                                       $status="Active";

                                   }
                                   else
                                   {
                                       $status="Locked";
                                   }
                                   echo"
                                     <tbody>
                            <tr>
                               
                                <td><b>".$meternumber."</b></td>
                                <td><b>".$name."</b></td>
                                <td><b>".$level."</b></td>
                                <td><b>".$status."<b></td>
                                <td><a class='btn btn-outline-primary' href='./m_details.php?mid=".$meternumber."'>Details</a></td>
                               
                                                       
                                
                                
                            </tr>
                            </tbody>
                                   ";

                                 }

                             }



                       ?>

                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->


<?php
include 'footer.php';
?>