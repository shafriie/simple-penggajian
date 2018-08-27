<header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <!--<a href="index.html" class="logo">-->
                        <!--Adminox-->
                        <!--</a>-->
                        <!-- Image Logo -->
                        <a href="<?php echo base_url('dashboard'); ?>" class="logo">
                            <i>PT Kapten Sakti Amarta</i>
                            <!-- <img style="width: 150px;height: 70px" src="<?php echo base_url('asset/ksa.png') ?>" alt=""> -->
                            <!-- <img src="<?php echo base_url('asset/horizontal'); ?>/assets/images/logo_sm.png" alt="" height="24" class="logo-sm"> -->
                        </a>

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">

                        <ul class="list-inline float-right mb-0">

                            <li class="menu-item list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>
                            

                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="<?php echo base_url('asset/horizontal'); ?>/assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="text-overflow"><small>Welcome ! John</small> </h5>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="zmdi zmdi-settings"></i> <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="zmdi zmdi-lock-open"></i> <span>Lock Screen</span>
                                    </a>

                                    <!-- item-->
                                    <a href="<?php echo base_url('logout'); ?>" class="dropdown-item notify-item">
                                        <i class="zmdi zmdi-power"></i> <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                        </ul>
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="<?php echo base_url('dashboard'); ?>"><i class="fi-air-play"></i>Dashboard</a>
                                
                            </li>
                            <li class="has-submenu">
                                <a href="<?php echo base_url('divisi'); ?>"><i class="fi-square-check"></i>Divisi</a>
                                
                            </li>

                            <li class="has-submenu " >
                                <a href="<?php echo base_url('jabatan'); ?>"><i class="fi-briefcase"></i>Jabatan</a>
                                
                            </li>
                            </li>
                            
                            <li class="has-submenu">
                                <a href="<?php echo base_url('pegawai'); ?>"><i class="fi-box"></i>Pegawai</a>
                            </li>
                            <li class="has-submenu">
                                <a href="<?php echo base_url('penggajian'); ?>"><i class="fi-file-add"></i>Penggajian</a>
                            </li>
                            <li class="has-submenu">
                                <a href="<?php echo base_url('laporan'); ?>"><i class="fi-paper"></i>Laporan</a>
                                

                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>