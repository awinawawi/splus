<html>

<head>
    <?php $this->load->view('admin/v_head') ?>
    <link rel="preload" href="<?= base_url('assets/user/plugins/bootstrap/dist/css/bootstrap.min.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?= base_url('assets/user/plugins/font-awesome/font/fontawesome-webfont.woff2?v=4.6.3') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?= base_url('assets/user/plugins/font-awesome/css/font-awesome.min.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?= base_url('assets/user/css/style.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?= base_url('assets/user/css/custom.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?= base_url('assets/user/css/animation.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?= base_url('assets/user/plugins/bootstrap-select/dist/css/bootstrap-select.min.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?= base_url('assets/user/css/bootstrap-datepicker.standalone.min.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <?php
            $this->load->view('admin/v_header');
            ?>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <?php $this->load->view('admin/v_sidebar') ?>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Data Pengguna
                    <small>S Plus Indonesia</small>
                </h1>
                <!-- <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Data Pengguna</li>
                </ol> -->
            </section>

            <section class="content">

                <div class="row">
                    <?php foreach ($data->result_array() as $i) :
                        $pengguna_id = $i['pengguna_id'];
                        $pengguna_nama = $i['pengguna_nama'];
                        $pengguna_jenkel = $i['pengguna_jenkel'];
                        $pengguna_email = $i['pengguna_email'];
                        $pengguna_username = $i['pengguna_username'];
                        $pengguna_password = $i['pengguna_password'];
                        $pengguna_nohp = $i['pengguna_nohp'];
                        $pengguna_level = $i['pengguna_level'];
                        $pengguna_photo = $i['pengguna_photo'];
                    ?>
                        <!--Modal Edit Pengguna-->
                        <div id="ModalEdit<?php echo $pengguna_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Ubah Alamat</h4>
                                    </div>
                                    <form class="form-horizontal" action="<?php echo base_url() . 'admin/Ubah_alamat/update_pengguna' ?>" method="post" enctype="multipart/form-data">
                                        <div class="modal-body">

                                            <!-- <div class="form-group">
                                                <label for="inputUserName" class="col-sm-4 control-label">Alamat</label>
                                                <div class="col-sm-7">
                                                    <input type="hidden" name="kode" value="<?php echo $pengguna_id; ?>" />
                                                    <input type="text" name="xnama" class="form-control" id="inputUserName" value="<?php echo $pengguna_nama; ?>" placeholder="Nama Lengkap" required>
                                                </div>
                                            </div> -->

                                            <div class="form-group">
                                                <label for="inputUserName" class="col-sm-4 control-label">Alamat</label>
                                                <div class="col-sm-7">
                                                    <textarea name="alamat" class="form-control" rows="5" required><?php echo $pengguna_nama; ?></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-4 control-label">Provinsi</label>
                                                <div class="col-sm-7">
                                                    <select name="provinsi" id="ajax_order_address_province" class="form-control" style="height:40px" required></select>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-4 control-label">Kecamatan</label>
                                                <div class="col-sm-7">
                                                    <select name="kecamatan" id="ajax_order_address_district" class="form-control" style="height:40px" required>
                                                        <option value="0">-- Pilih Kecamatan --</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-4 control-label">Kota/Kab</label>
                                                <div class="col-sm-7">
                                                    <select name="kota" id="ajax_order_address_city" class="form-control" style="height:40px" required>
                                                        <option value="0">-- Pilih Kota/Kab --</option>
                                                    </select>
                                                </div>
                                            </div>




                                        </div>

                                        <div class="modal-footer">
                                            <a href="<?php echo base_url() . 'admin/dashboard' ?>">
                                                <button type="button" class="btn btn-default btn-flat">kembali</button>
                                            </a>
                                            <button type="submit" class="btn btn-primary btn-flat" id="simpan">Update</button>
                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </section>


        </div>

    </div>


    <!-- JS Library-->
    <script defer type="text/javascript" src="<?= base_url('assets/user/plugins/jquery/dist/jquery.min.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/user/js/jssor.slider-28.0.0.min.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/user/js/slider.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/user/js/lazysizes.min.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/user/js/custom.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/user/plugins/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/user/plugins/bootstrap-select/dist/js/bootstrap-select.min.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/user/js/main.js') ?>"></script>
    <?php if ($this->uri->segment(1) == "order" || $this->uri->segment(1) == "cart") : ?>
        <script defer type="text/javascript" src="<?= base_url('assets/user/js/bootstrap-datepicker.min.js') ?>"></script>
        <script defer type="text/javascript" src="<?= base_url('assets/user/js/order.js') ?>"></script>
    <?php endif; ?>

    <!--Modal Reset Password-->
    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>
    <?php if ($this->session->flashdata('msg') == 'error') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Error',
                text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
                showHideTransition: 'slide',
                icon: 'error',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#FF4859'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'warning') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Warning',
                text: "Gambar yang Anda masukan terlalu besar.",
                showHideTransition: 'slide',
                icon: 'warning',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#FFC017'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'success') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "Pengguna Berhasil disimpan ke database.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'info') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Info',
                text: "Pengguna berhasil di update",
                showHideTransition: 'slide',
                icon: 'info',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#00C9E6'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'success-hapus') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "Pengguna Berhasil dihapus.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'show-modal') : ?>
        <script type="text/javascript">
            $('#ModalResetPassword').modal('show');
        </script>
    <?php else : ?>

    <?php endif; ?>
</body>

</html>