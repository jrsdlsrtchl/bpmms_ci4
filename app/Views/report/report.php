<?= $this->extend("layout/base") ?>

<?= $this->section("content") ?>


<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">B/w Dates Report Date Selection</h1>

<form method="post" action="bwdates-report-result.php">
    <div class="row">

        <div class="col-lg-6">

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">

                <div class="card-body">
                    <div class="form-group">
                        <label>From Date</label>
                        <input type="date" class="form-control" id="fromdate" name="fromdate" required="true">
                    </div>

                    <div class="form-group">
                        <label>To Date</label>
                        <input type="date" class="form-control" id="todate" name="todate" required="true">
                    </div>

                    <div class="form-group">
                        <label>Family Member</label>
                        <select class="form-control" id="familymember" name="familymember" required="true">
                            <option value="">Select</option>
                            <!-- $uid = intval($_SESSION['aid']);
                            $query = mysqli_query($con, "select * from tblfamilymembers where userId='$uid' ");
                            $cnt = 1;
                            while ($row = mysqli_fetch_array($query)) {
                             -->
                            <option value=""> </option>
                            <!-- }  -->
                        </select>
                    </div>


                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="Submit">
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>

<?= $this->endSection() ?>