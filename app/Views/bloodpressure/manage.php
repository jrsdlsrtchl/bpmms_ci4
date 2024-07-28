<?= $this->extend("layout/base") ?>

<?= $this->section("content") ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Manage Family Members BP Details</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Family Members BP Information</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Sno.</th>
                        <th>Family Member Name</th>
                        <th>Rleation</th>
                        <th>age</th>
                        <th>BP SYS/DIA</th>
                        <th>Pulse /min</th>
                        <th>BP Date Time</th>
                        <th>Posting Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sno.</th>
                        <th>Family Member Name</th>
                        <th>Relation</th>
                        <th>age</th>
                        <th>BP SYS/DIA</th>
                        <th>Pulse /min</th>
                        <th>BP Date Time</th>
                        <th>Posting Date</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <!-- php $uid = intval($_SESSION['aid']);
                    $query = mysqli_query($con, "select *,tblbpdetails.id as bpid from tblbpdetails 
left join tblfamilymembers on tblfamilymembers.id=tblbpdetails.memberId
where tblbpdetails.userId='$uid'");
                    $cnt = 1;
                    while ($row = mysqli_fetch_array($query)) {
                     -->

                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> / </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td>

                            <a href="manage-bp-details.php" onclick="return confirm('Do you really want to delete this record?');"><i class="fa fa-trash" aria-hidden="true" style="color:red" title="Delete this record"></i></a>
                        </td>
                    </tr>
                    <!-- }  -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>