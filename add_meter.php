<?php

$pageTitle="Register device to generate new meter number";

include 'header.php';
?>
<div class="col-lg-12">

<form class="" action="save_meter.php" method="POST">

    <div class="form-group row">
        <label class="col-sm-2"><b>First Name</b></label>
        <div class="col-sm-6">
        <input type="text" class="form-control" name="fname" required placeholder="Enter last name"/>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2"><b>Last Name</b></label>
        <div class="col-sm-6">
        <input type="text" class="form-control" name="lname" required placeholder="Enter last name"/>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2"><b> NID</b></label>
        <div class="col-sm-6">
            <input type="number" class="form-control"  name="nid" required placeholder="Enter a NID"/>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2"><b>Telephone</b></label>
        <div class="col-sm-6">
        <input type="number" class="form-control" name="telephone" required placeholder="Enter last name"/>
        </div>
    </div>

    <div class="form-group">
        <div>
            <button type="submit" class="btn btn-primary waves-effect waves-light">
                Submit
            </button>

        </div>
    </div>
</form>
</div>
<?php
include 'footer.php';

?>


