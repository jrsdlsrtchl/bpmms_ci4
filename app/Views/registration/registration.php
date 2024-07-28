<?= $this->extend("layout/base") ?>

<?= $this->section("content") ?>

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">BP Monitoring Management System</h1>
<form name="newtesting" method="post">
    <div class="row">

        <div class="col-lg-6">

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">User Registration</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter your full name..." pattern="[A-Za-z ]+" title="letters only" required="true">
                    </div>
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="Please enter your mobile number" pattern="[0-9]{10}" title="10 numeric characters only" required="true">

                    </div>
                    <div class="form-group">
                        <label>Email id</label>
                        <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Enter your email id" required="true" onBlur="emailAvailability()"> <span id="email-availability-status" style="font-size:12px;"></span>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" id="userpassword" name="userpassword" placeholder="Enter your paassword" required="true">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" id="submit">
                    </div>

                </div>
            </div>

        </div>


    </div>
</form>

<?= $this->endSection() ?>