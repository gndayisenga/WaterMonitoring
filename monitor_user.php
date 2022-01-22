<?php

$pageTitle="IoT-HWMS-Monitor household";
include 'header.php';
include "./dbconnect.php";
?>
<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">

                <div class="table-rep-plugin">
                    <div class="table-responsive b-0" data-pattern="priority-columns">
                        <table id="tech-companies-1" class="table  table-striped">
                            <thead>
                            <tr>
                                <th>User id</th>
                                <th data-priority="1">First name</th>
                                <th data-priority="2">Last name</th>
                                <th data-priority="3">Telephone </th>
                                <th data-priority="4">Email</th>
                                <th data-priority="5">Role</th>
                                <th data-priority="6">Username</th>
                                <th data-priority="7">password</th>
                                <th data-priority="8">Action</th>
                                <?php


                                //$mysqli = new mysqli("localhost","root","","iot_water");
                                /*
                                $conn = new mysqli("localhost", "root", "",  "iot_water");

                                if ($conn -> connect_error) {
                                    echo "Failed to connect to MySQL: " . $conn->connect_error;
                                    //exit();
                                }*/

                                $sql = "SELECT * FROM `admin`";
                                $result =  $conn -> query($sql);
                                if($result->num_rows>0)
                                {
                                while($row=$result->fetch_assoc()) {
                                    $userid = $row['admin_id'];
                                    $firstname = $row['admin_first_name'];
                                    $lastname = $row['admin_last_name'];
                                    $telephone = $row['admin_telephone'];
                                    $email = $row['admin_email'];
                                    $role = $row['admin_role'];
                                    $username = $row['admin_username'];
                                    $password = $row['admin_password'];

                                    echo"
                                     <tbody>
                            <tr>
                               
                                <td>".$userid."</td>
                                <td>".$firstname."</td>
                                <td>".$lastname."</td>
                                <td>".$telephone."</td>
                                <td>".$email."</td>
                                <td>".$role."</td>
                                <td>".$username."</td>
                                <td>".$password."</td>   
                                                              
                                <td><a class='btn btn-outline-primary'href='#update.php'>Update</a><a class='btn btn-outline-primary' href='#delete.php'> Delete</a></td> 
                                                             
                                
                                 </tr>
                            </tbody>
                                   ";
                                } } ?>
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















