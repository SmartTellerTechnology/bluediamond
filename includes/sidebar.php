<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Blue Diamonds</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">[Customer name]</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!--
<div class="form-inline">
<div class="input-group" data-widget="sidebar-search">
<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-sidebar">
<i class="fas fa-search fa-fw"></i>
</button>
</div>
</div>
</div>
-->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="index.php?page=dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas "></i>
                        </p>
                    </a>

                </li>

                <li class="nav-header">TRANSACTIONS</li>
                <li class="nav-item">
                    <a href="deposit.php?page=deposit" class="nav-link <?php echo ($page == "dashboard" ? "active" : "")?>">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Deposit

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="withdraw.php" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Withdraw 
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="transactions.php?page=transactions" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Transaction History
                            
                        </p>
                    </a>

                <li class="nav-header">ACCOUNT</li>

                <li class="nav-item">
                    <a href="profile.php?page=profile" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Profile/Account Settings</p>
                    </a>
                </li>

                <li class="nav-header">Exit</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Logout</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>