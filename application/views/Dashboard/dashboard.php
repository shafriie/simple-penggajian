
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Sistem Penggajian</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?php echo base_url('asset/horizontal'); ?>/assets/images/favicon.ico">

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="<?php echo base_url('asset'); ?>/plugins/morris/morris.css">

        <!-- App css -->
        <link href="<?php echo base_url('asset/horizontal'); ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('asset/horizontal'); ?>/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('asset/horizontal'); ?>/assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="<?php echo base_url('asset/horizontal'); ?>/assets/js/modernizr.min.js"></script>

    </head>


    <body>


        <!-- Navigation Bar-->
        <?php $this->load->view('Layout/header'); ?>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title"><b>Recent Candidates</b></h4>
                            <p class="text-muted font-14 m-b-20">
                                Your awesome text goes here.
                            </p>

                            <div class="table-responsive">
                                <table class="table m-0 table-colored table-primary table-hover">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr>
                                    <tr>
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>2012/08/06</td>
                                        <td>$137,500</td>
                                    </tr>
                                    <tr>
                                        <td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>2010/10/14</td>
                                        <td>$327,900</td>
                                    </tr>
                                    <tr>
                                        <td>Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                    </tr>
                                    <tr>
                                        <td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>2008/12/13</td>
                                        <td>$103,600</td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->


            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <!-- Footer -->
        <?php $this->load->view('Layout/footer'); ?>
        <!-- End Footer -->


        <!-- jQuery  -->
        <script src="<?php echo base_url('asset/horizontal'); ?>/assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url('asset/horizontal'); ?>/assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
        <script src="<?php echo base_url('asset/horizontal'); ?>/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url('asset/horizontal'); ?>/assets/js/waves.js"></script>
        <script src="<?php echo base_url('asset/horizontal'); ?>/assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url('asset/horizontal'); ?>/assets/js/jquery.scrollTo.min.js"></script>

        <!-- Counter js  -->
        <script src="<?php echo base_url('asset'); ?>/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="<?php echo base_url('asset'); ?>/plugins/counterup/jquery.counterup.min.js"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="<?php echo base_url('asset'); ?>/plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="<?php echo base_url('asset'); ?>/plugins/jquery-knob/jquery.knob.js"></script>

        <!--Morris Chart-->
        <script src="<?php echo base_url('asset'); ?>/plugins/morris/morris.min.js"></script>
        <script src="<?php echo base_url('asset'); ?>/plugins/raphael/raphael-min.js"></script>

        <!-- Sparkline charts -->
        <script src="<?php echo base_url('asset'); ?>/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Dashboard init -->
        <script src="<?php echo base_url('asset/horizontal'); ?>/assets/pages/jquery.dashboard-2.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url('asset/horizontal'); ?>/assets/js/jquery.core.js"></script>
        <script src="<?php echo base_url('asset/horizontal'); ?>/assets/js/jquery.app.js"></script>

    </body>
</html>