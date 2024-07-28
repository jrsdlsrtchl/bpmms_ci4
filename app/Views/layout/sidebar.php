        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa fa-medkit"></i>
                </div>
                <div class="sidebar-brand-text mx-3">BPM-MS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- if ($_SESSION['aid']) : -->

            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('dashboard/index') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Family Members</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= site_url('familymembers/add') ?>">Add</a>
                        <a class="collapse-item" href="<?= site_url('familymembers/manage') ?>">Manage</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-virus"></i>
                    <span>BP</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= site_url('bloodpressure/add') ?>">Add</a>
                        <a class="collapse-item" href="<?= site_url('bloodpressure/manage') ?>">Manage</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Report</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= site_url('report/index') ?>">B/w Dates Report</a>
                    </div>
                </div>
            </li>

            <!-- else : -->

            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('index') ?>">
                    <i class="fas fa-home"></i>
                    <span>Home</span></a>
            </li>
            <hr class="sidebar-divider">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('registration') ?>">
                    <i class="fas fa-users"></i>
                    <span>Signup/ Registration</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('login') ?>">
                    <i class="fas fa-users"></i>
                    <span>Login</span></a>
            </li>

            <!-- endif; -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->