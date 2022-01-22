<div class="row">
    <div class="col-lg-10">
        <div class="card m-b-30">
            <div class="card-body">


                <form class="" action="Save_user.php"  method="post">
                    <div class="form-group row">
                        <label class="col-sm-2">First Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="firstname" required placeholder="Enter First Name"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  name="lastname" required
                                   placeholder="Enter a last name"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Telephone</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="telephone" required
                                   placeholder="+250XXXXXX"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">E-Mail</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" required
                                   parsley-type="email" placeholder="Enter a valid e-mail"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" id="pass2" class="form-control" name="username"  required
                                   placeholder="Enter username"/>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"> User role</label>
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
                            Submit
                        </button>

                    </div>
            </div>
            </form>

        </div>
    </div>
</div> <!-- end col -->
