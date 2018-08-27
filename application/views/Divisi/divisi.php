
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Sistem Penggajian</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?php echo base_url('asset'); ?>/horizontal/assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="<?php echo base_url('asset'); ?>/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('asset'); ?>/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="<?php echo base_url('asset'); ?>/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="<?php echo base_url('asset'); ?>/horizontal/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('asset'); ?>/horizontal/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('asset'); ?>/horizontal/assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="<?php echo base_url('asset'); ?>/horizontal/assets/js/modernizr.min.js"></script>

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
                                    <li class="breadcrumb-item active">Divisi</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Divisi</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
                    <div class="col-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Data Divisi</b></h4>
                            <p class="text-muted font-13 m-b-30" align="right">
                                <a href="" class="btn btn-danger">(+) Add</a>
                            </p>

                            <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Id Divisi</th>
                                    <th>Nama Divisi</th>
                                    <th>Action</th>
                                
                                </tr>
                                </thead>
                                <?php 
                                    $no=0;
                                    foreach ($divisis as $divisi): $no++ ?>
                                <tbody>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $divisi['id_divisi'] ?></td>
                                    <td><?php echo $divisi['nama_divisi'] ?></td>
                                    <td align="center">
                                                <a href=""><i class="fa fa-pencil"></i></a>
                                                &nbsp;&nbsp;
                                                <a href=""><i class="fa fa-trash"></i></a>
                                            </td>
                                </tr>
                                <?php endforeach ?>

                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end row -->

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

        <!-- Required datatable js -->
        <script src="<?php echo base_url('asset'); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url('asset'); ?>/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="<?php echo base_url('asset'); ?>/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url('asset'); ?>/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="<?php echo base_url('asset'); ?>/plugins/datatables/jszip.min.js"></script>
        <script src="<?php echo base_url('asset'); ?>/plugins/datatables/pdfmake.min.js"></script>
        <script src="<?php echo base_url('asset'); ?>/plugins/datatables/vfs_fonts.js"></script>
        <script src="<?php echo base_url('asset'); ?>/plugins/datatables/buttons.html5.min.js"></script>
        <script src="<?php echo base_url('asset'); ?>/plugins/datatables/buttons.print.min.js"></script>
        <script src="<?php echo base_url('asset'); ?>/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="<?php echo base_url('asset'); ?>/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url('asset'); ?>/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url('asset'); ?>/horizontal/assets/js/jquery.core.js"></script>
        <script src="<?php echo base_url('asset'); ?>/horizontal/assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf', 'colvis']
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>

    </body>
</html>