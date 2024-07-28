<?= $this->extend("layout/base") ?>

<?= $this->section("content") ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Manage Family Members</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Family Members Information</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Sno.</th>
                        <th>Family Member Name</th>
                        <th>Relation</th>
                        <th>age</th>
                        <th>Reg. Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sno.</th>
                        <th>Family Member Name</th>
                        <th>Relation</th>
                        <th>Age</th>
                        <th>Reg. Date</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <!-- $uid = $_SESSION['aid'];
                    $query = mysqli_query($con, "select * from tblfamilymembers where userId='$uid'");
                    $cnt = 1;
                    while ($row = mysqli_fetch_array($query)) { -->


                    <tr>
                        <td> 1 </td>
                        <td> Cardo Dalisay </td>
                        <td> Father </td>
                        <td> 12 </td>
                        <td> 1 - 30 - 1980</td>
                        <td>

                            <a href="edit-family-member.php"><i class="fas fa-edit" style="color:blue"></i></a> |

                            <a href="manage-family-members" onclick="return confirm('Do you really want to delete this record?');"><i class="fa fa-trash" aria-hidden="true" style="color:red" title="Delete this record"></i></a>
                        </td>
                    </tr>
                    <!-- }  -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>