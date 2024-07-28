<?= $this->extend("layout/base") ?>

<?= $this->section("content") ?>

<!-- 
$fdate = $_POST['fromdate'];
$tdate = $_POST['todate'];
$familymember = $_POST['familymember'];
$familymemberdata = explode("-", $familymember);
$fid = $familymemberdata['0'];
$familname = $familymemberdata['1'];
$uid = intval($_SESSION['aid']); -->


<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">B/W Dates Report Result From to of </h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">B/W Dates Report Results</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <form name="assignto" method="post">
                <table border="1" class="table table-striped">
                    <!-- 
                     $query = mysqli_query($con, "select * from tblfamilymembers where userId='$uid' and id='$fid'");
                     $cnt = 1;
                     while ($row = mysqli_fetch_array($query)) { -->

                    <tr>
                        <th>Family Member Name</th>
                        <td> </td>
                    </tr>
                    <tr>
                        <th>Relation</th>
                        <td> </td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td> </td>
                    </tr>
                    <!-- }  -->
                </table>
                <h5 style="color:blue">BP Records</h5>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Sno.</th>
                            <th>BP SYS/DIA</th>
                            <th>Pulse /min</th>
                            <th>BP Date Time</th>
                            <th>Posting Date</th>

                        </tr>
                    </thead>


                    <tbody>

                        <!-- //                         $query = mysqli_query($con, "select *,tblbpdetails.id as bpid from tblbpdetails 
// left join tblfamilymembers on tblfamilymembers.id=tblbpdetails.memberId
// where tblbpdetails.userId='$uid' and (date(postingTime) between '$fdate' and '$tdate') and tblbpdetails.memberId='$fid'");
//                         $cnt = 1;
//                         $count = mysqli_num_rows($query);
//                         if ($count > 0) {
//                             while ($row = mysqli_fetch_array($query)) { -->


                        <tr>
                            <td> </td>

                            <td> / </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td>



                            </td>
                        </tr>
                        <!-- $cnt++;
                                $tsys += $sys;
                                $tdia += $dia;
                                $tpulse += $pulse;
                             }  -->
                        <tr>
                            <th>Average</th>
                            <td> / / / </td>
                            <td colspan="3"> </td>
                        </tr>

                        <!-- // } else { -->
                        <tr>
                            <td colspan="5" style="color:red; font-size:22px;">No Record Found</td>


                        </tr>
                        <!-- } -->
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>



<?= $this->endSection() ?>