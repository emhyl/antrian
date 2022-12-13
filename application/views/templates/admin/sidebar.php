

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                       <h3 class="text-center"> <strong>Admin</strong> </h3>
                    </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="<?= base_url('admin/home') ?>" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="<?= base_url('admin/pemohon') ?>"><i class="fa fa-fw" aria-hidden="true" title="Copy to use user-plus"></i> Pemohon</a>
                </li>
                <li>
                    <a href="<?= base_url('admin/antrian') ?>"><i class="fa fa-fw" aria-hidden="true" title="Copy to use clock-o"></i> Antrian</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-table fa-fw"></i> Data Master<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?= base_url('admin/data_master/data_login') ?>">Data Login</a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/data_master/data_pemohon') ?>">Data Pemohon</a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/data_master/data_berkas') ?>">Data Berkas</a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/data_master/data_antrian') ?>">Data Antrian</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
               
            </ul>
        </div>
    </div>
</nav>
