
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Adminox - Responsive Web App Kit</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?php echo base_url('asset'); ?>/horizontal/assets/images/favicon.ico">

        <!-- App css -->
        <link href="<?php echo base_url('asset'); ?>/horizontal/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('asset'); ?>/horizontal/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('asset'); ?>/horizontal/assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="<?php echo base_url('asset'); ?>/horizontal/assets/js/modernizr.min.js"></script>

    </head>


    <body>


        <!-- Navigation Bar-->
        <!-- Navigation Bar-->
        <?php $this->load->view('Layout/header'); ?>
        <!-- End Navigation Bar-->

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
                                    
                                    <li class="breadcrumb-item active">Form Penggajian</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Form Penggajian</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row" align="">
                    <div class="col-lg-6" align="">
                        <div class="card-box">
                            <h4 class="header-title m-t-0">Input Masks</h4>
                            <p class="text-muted font-14 m-b-30">
                                Your awesome text goes here.Your awesome text goes here.
                            </p>

                            <form action="#">
                                
                                <div class="form-group">
                                    <label>NIP</label>
                                    <select class="form-control">
                                        <option></option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label>ID Jabatan</label>
                                    <input type="text" placeholder="" data-mask="999/99/999/9999/9" class="form-control">

                                </div>
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input type="date" placeholder=""  class="form-control">
                                    <span class="font-14 text-muted"></span>
                                </div>
                                <div class="form-group">
                                    <label>Denda</label>
                                    <input type="text" placeholder="" data-mask="999 99 999 9999 9"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Gaji Pokok</label>
                                    <input type="text" placeholder="" data-mask="999 99 999 9999 9" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Tunjangan Jabatan</label>
                                    <input type="text" placeholder="" data-mask="999 99 999 9999 9" class="form-control">
                                <div class="form-group">
                                    <label>Pajak</label>
                                    <input type="text" placeholder="" data-mask="999 99 999 9999 9" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Gaji Total</label>
                                    <input type="text" placeholder="" data-mask="999 99 999 9999 9" class="form-control">
                                </div>
                                <br>
                                <br>
                                <div>
                                    <button type="button" class="btn btn-inverse btn-bordered waves-effect w-md waves-light">Inverse</button>

                                </div>
                            </form>
                        </div> <!-- end card-box -->
                    </div> <!-- end col -->

                    

                            </form>
                        </div> <!-- end card-box -->
                    </div> <!-- end col -->
                

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <!-- Footer -->
        <?php $this->load->view('Layout/footer'); ?>
        <!-- End Footer -->


        <!-- jQuery  -->
        <script src="<?php echo base_url('asset'); ?>/horizontal/assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url('asset'); ?>/horizontal/assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
        <script src="<?php echo base_url('asset'); ?>/horizontal/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url('asset'); ?>/horizontal/assets/js/waves.js"></script>
        <script src="<?php echo base_url('asset'); ?>/horizontal/assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url('asset'); ?>/horizontal/assets/js/jquery.scrollTo.min.js"></script>

        <script src="<?php echo base_url('asset'); ?>/plugins/assets/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url('asset'); ?>/plugins/assets/autoNumeric/autoNumeric.js" type="text/javascript"></script>

        <!-- App js -->
        <script src="<?php echo base_url('asset'); ?>/horizontal/assets/js/jquery.core.js"></script>
        <script src="<?php echo base_url('asset'); ?>/horizontal/assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            jQuery(function($) {
                $('.autonumber').autoNumeric('init');
            });
        </script>

    </body>
</html>