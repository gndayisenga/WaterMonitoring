<?php
$pageTitle="IoT-HWMS-Add  user";
$title="IoT Household water management ";
include 'header.php';
?>
    <div class="row">
        <div class="col-lg-10">
            <div class="card m-b-30">
                <div class="card-body">


                    <form class="" action="Save_user.php"  method="post">
                        <div class="form-group row">
                            <label class="col-sm-2"><b>First Name</b></label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="firstname" required placeholder="Enter First Name"/>
                            </div>
                            </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><b>Last Name</b></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  name="lastname" required
                                        placeholder="Enter a last name"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><b>Telephone</b></label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="telephone" required
                                        placeholder="+078XXXXXX"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><b>E-Mail</b></label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" required
                                       parsley-type="email" placeholder="ex:gil@gmail.com"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><b>Username</b></label>
                            <div class="col-sm-10">
                                <input type="text" id="pass2" class="form-control" name="username"  required
                                       placeholder="Enter username"/>
                            </div>

                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"> <b>User role</b></label>
                            <div class="col-sm-10">

                                <select   class="form-control" name="user_role">
                                    <option>Customer</option>
                                    <option>Admin</option>
                                    <option>Other</option>
                                </select>

                            </div>
                        </div>
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                   Register User
                                </button>

                            </div>
                        </div>
                    </form>

                </div>
            </div>
    </div> <!-- end col -->




<?php
include 'footer.php';
?>