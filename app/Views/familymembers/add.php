<?= $this->extend("layout/base") ?>

<?= $this->section("content") ?>

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Add Family Member</h1>
<form name="addphlebotomist" method="post" action="<?= "" ?>">
    <div class="row">

        <div class="col-lg-8">

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Personal Information</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Member Name</label>
                        <input type="text" class="form-control" id="membername" name="membername" placeholder="Enter Family Member Name" required="true">
                    </div>

                    <div class="form-group">
                        <label>Relation</label>
                        <select class="form-control" id="memberrelation" name="memberrelation" required="true">
                            <option value="">Select</option>
                            <option value="Mother">Mother</option>
                            <option value="Father">Father</option>
                            <option value="Grandfather">Grandfather</option>
                            <option value="Grandmother">Grandmother</option>
                            <option value="Sister">Sister</option>
                            <option value="Brother">Brother</option>
                            <option value="Wife">Wife</option>
                            <option value="Husband">Husband</option>
                            <option value="Son">Son</option>
                            <option value="Daughter">Daughter</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Member age</label>
                        <input type="text" class="form-control" id="memberage" name="memberage" placeholder="Please enter your age" pattern="[0-9]+" title="2 numeric characters only" required="true" maxlength="2">
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