
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

        <!-- Sweet Alert -->
        <link href="<?php echo base_url('asset'); ?>/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

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
                                    <li class="breadcrumb-item active">Pegawai</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Pegawai</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
                    <div class="col-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Data Pegawai</b></h4>
                            <p class="text-muted font-13 m-b-30" align="right">
                                <a href="" type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#signup-modal">(+) Add</a>
                            </p>

                            <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pegawai</th>
                                    <th>Jabatan</th>
                                    <th>Email</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>No Telepon</th>
                                    <th>Action</th>
                                
                                </tr>
                                </thead>
                                <?php 
                                    $no=0;
                                    foreach ($pegawais as $pegawai): $no++ ?>
                                <tbody>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $pegawai['nama'] ?></td>
                                    <td>
                                        <?php 
                                            if ($pegawai['jabatan'] == 1) {
                                                echo "<span class='label label-info'>HRD</span>";
                                            }
                                            else if ($pegawai['jabatan'] == 2) {
                                                echo "<span class='label label-danger'>Manager</span>";
                                            }
                                            else{
                                                echo "<span class='label label-warning'>Pegawai</span>";   
                                            }

                                         ?>
                                    </td>
                                    <td><?php echo $pegawai['email'] ?></td>
                                    <td><?php echo $pegawai['jenis_kelamin'] ?></td>
                                    <td><?php echo $pegawai['alamat'] ?></td>
                                    <td><?php echo $pegawai['no_telp'] ?></td>
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


                            <!-- Signup modal content -->
                            <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                                        <div class="modal-body">
                                            
                                            <form id="form-input-pegawai" class="form-horizontal">

                                                
                                                <div class="form-group m-b-25">
                                                    <div class="col-xs-12">
                                                        <label for="username">Username</label>
                                                        <input class="form-control" type="text" name="username" required="" placeholder="Username" >
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group m-b-25">
                                                    <div class="col-xs-12">
                                                        <label for="password">Password</label>
                                                        <input class="form-control" type="password" name="password" required="" placeholder="Password">
                                                    </div>
                                                </div>

                                                <div class="form-group m-b-25">
                                                    <div class="col-xs-12">
                                                        <label for="nama_pegawai">Nama Pegawai</label>
                                                        <input class="form-control" type="text" name="nama" required="" placeholder="Nama Pegawai">
                                                    </div>
                                                </div>

                                                <div class="form-group m-b-25">
                                                    <div class="col-xs-12">
                                                        <label for="jabatan">Jabatan</label>
                                                        <select name="jabatan" class="form-control" required>
                                                            <option value="">-- Choose --</option>
                                                            <option value="1">HRD</option>
                                                            <option value="2">Manager</option>
                                                            <option value="3">Pegawai</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group m-b-25">
                                                    <div class="col-xs-12">
                                                        <label for="email">Email</label>
                                                        <input class="form-control" type="email" required="" name="email" placeholder="Emai">
                                                    </div>
                                                </div>

                                                <div class="form-group m-b-25">
                                                    <div class="col-xs-12">
                                                        <label for="jk">Jenis Kelamin</label>
                                                        <select name="jk" class="form-control" required>
                                                            <option value="">-- Choose --</option>
                                                            <option value="Laki-laki">Laki-laki</option>
                                                            <option value="Perempuan">Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group m-b-25">
                                                    <div class="col-xs-12">
                                                        <label for="alamat">Alamat</label>
                                                        <textarea class="form-control" name="alamat" required="" placeholder="Alamat"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group m-b-25">
                                                    <div class="col-xs-12">
                                                        <label for="no_telp">No Telepon</label>
                                                        <input type="text" name="no_telp" class="form-control" required placeholder="Nomor Telepon">
                                                    </div>
                                                </div>

                                                <div class="form-group account-btn text-center m-t-10">
                                                    <div class="col-xs-12">
                                                        <button class="btn w-lg btn-rounded btn-lg btn-primary waves-effect waves-light" type="submit">Submit</button>
                                                    </div>
                                                </div>

                                            </form>


                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->




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
        <script src="<?php echo base_url('asset'); ?>/plugins/sweet-alert2/sweetalert2.min.js"></script>


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

        <script type="text/javascript">
            $(document).ready(function() {
                $('#form-input-pegawai').on('submit', function(event) {
                    event.preventDefault();
                    $.ajax({
                        url: '<?php echo base_url('Pegawai/submitPegawai'); ?>',
                        type: 'POST',
                        dataType: 'JSON',
                        data: $(this).serialize(),
                        success: function(x){
                            console.log(x);
                            if (x.info == 'true'){
                                swal({
                                     title: "Good Job!",
                                    text: x.msg,
                                    type: "success"
                                    }).then((result) => {
                                        
                                        location.reload();

                                    }, function() {
                                        
                                });
                                
                            }
                            else
                            {
                                swal({
                                        title: 'Errors',
                                        text: x.msg,
                                        type: 'error',
                                    });   
                            }
                        }
                    });
                });
            });
        </script>

    </body>
</html>