        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <ul class="navbar-nav ml-auto">

                        <!-- QUERY COUNT NIKAH -->
                        <?php
                        $role_id = $this->session->userdata('role_id');
                        $queryNikah = "SELECT COUNT(*) AS COUNT FROM nikah";
                        $count_nikah = $this->db->query($queryNikah)->row_array();
                        ?>
                        <!-- EN -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php foreach ($count_nikah as $n) : ?>
                                    <i class="fas fa-users fa-fw"></i>
                                    <!-- Counter - Alerts -->
                                    <span class="badge badge-danger badge-counter"><?= $n; ?>+</span>
                                <?php endforeach; ?>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Notifikasi data nikah baru!
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="<?= base_url('administrasi/nikah')  ?>">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-user-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-500 text="><?= "Hari ini " . date("Y/m/d") . "<br>"; ?></div>
                                        <span class="font-weight-bold">Data nikah baru!</span>
                                    </div>
                                </a>

                                <a class="dropdown-item text-center small text-gray-500" href="#"> lihat selengkapnya</a>
                            </div>
                        </li>

                        <!-- QUERY COUNT UMAT -->
                        <?php
                        $role_id = $this->session->userdata('role_id');
                        $queryUmat = "SELECT COUNT(*) AS COUNT FROM user";
                        $count_umat = $this->db->query($queryUmat)->row_array();
                        ?>
                        <!-- END QUERY -->

                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php foreach ($count_umat as $u) : ?>
                                    <i class="fas fa-users fa-fw"></i>
                                    <!-- Counter - Alerts -->
                                    <span class="badge badge-danger badge-counter"><?= $u; ?>+</span>
                                <?php endforeach; ?>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Notifikasi data umat baru!
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="<?= base_url('administrasi/umat')  ?>">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-user-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-500 text="><?= "Hari ini " . date("Y/m/d") . "<br>"; ?></div>
                                        <span class="font-weight-bold">Data umat baru!</span>
                                    </div>
                                </a>

                                <a class="dropdown-item text-center small text-gray-500" href="#"> lihat selengkapnya</a>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
                                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url('user/index'); ?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profil
                                </a>
                                <a class="dropdown-item" href="<?= base_url('user/edit'); ?>">
                                    <i class="fas fa-edit fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Edit Profil
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->