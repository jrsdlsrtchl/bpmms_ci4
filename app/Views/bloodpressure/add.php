<?= $this->extend("layout/base") ?>

<?= $this->section("content") ?>

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Add Family Member BP Details</h1>
<form name="addphlebotomist" method="post">
    <div class="row">

        <div class="col-lg-8">

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">BP Details Information</h6>
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <label>Select Family Member</label>
                        <select class="form-control" id="memberid" name="memberid" required="true">
                            <option value="">Select</option>
                            <!-- $uid = $_SESSION['aid'];
                            $query = mysqli_query($con, "select * from tblfamilymembers where userId='$uid'");
                            while ($row = mysqli_fetch_array($query)) {  -->
                            <option value="Cardo Dalisay"> Cardo Dalisay </option>
                            <option value="Juan Dela Cruz"> Juan Dela Cruz </option>
                            <!-- }  -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label>SYS mmHg</label>
                        <input type="text" class="form-control" id="systolic" name="systolic" placeholder="Systolic blood pressure" maxlength="3" required="true">
                    </div>

                    <div class="form-group">
                        <label> DIA mmHg</label>
                        <input type="text" class="form-control" id="diastolic" name="diastolic" placeholder="Diastolic  blood pressure" maxlength="3" required="true">
                    </div>

                    <div class="form-group">
                        <label>Pulses /min</label>
                        <input type="text" class="form-control" id="pulses" name="pulses" placeholder="Enter pulses per minute" maxlength="3" required="true">
                    </div>

                    <div class="form-group">
                        <label>Date and Time</label>
                        <input type="datetime-local" class="form-control" id="bpdatetime" name="bpdatetime" required="true">
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