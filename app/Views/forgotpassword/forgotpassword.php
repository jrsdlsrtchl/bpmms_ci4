<?= $this->extend("layout/base") ?>


<?= $this->section("content") ?>

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">
        <h3 align="center" style="margin-top:4%;color:#000">BP Monitoring Management System </h3>
        <div class="card o-hidden border-0 shadow-lg my-5">

            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <form name="login" method="post" name="changepassword" onsubmit="return checkpass();">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Password Recovery</h1>
                                </div>
                                <form class="user">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="emailid" id="emailid" placeholder="Enter Email id" required="true">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="contactno" placeholder="Contact Number" autocomplete="off" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="newpassword" id="newpassword" placeholder="New Password" autocomplete="off" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" autocomplete="off" class="form-control">
                                    </div>

                                    <input type="submit" name="submit" class="btn btn-primary btn-user btn-block" value="Submit">
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= site_url('login') ?>" style="font-weight:bold">Signin</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= site_url('index') ?>" style="font-weight:bold;"><i class="fa fa-home" aria-hidden="true"></i> Home Page</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>

    </div>

</div>

<?= $this->endSection() ?>