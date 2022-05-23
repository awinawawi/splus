<html>

<head>
    <?php $this->load->view('admin/v_head') ?>
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
                                    <form class="form-horizontal" action="<?php echo base_url() . 'admin/Ubah_profil/update_pengguna' ?>" method="post" enctype="multipart/form-data">
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

                                            <!-- <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-4 control-label">Kecamatan</label>
                                                <div class="col-sm-7">
                                                    <input type="email" name="xemail" class="form-control" value="<?php echo $pengguna_email; ?>" id="inputEmail3" placeholder="Email" required>
                                                </div>
                                            </div> -->

                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-4 control-label">Kecamatan</label>
                                                <div class="col-sm-7">
                                                    <input class='form-control' type='text' name='kec' value="<?php echo $pengguna_email; ?>" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputUserName" class="col-sm-4 control-label">Jenis Kelamin</label>
                                                <div class="col-sm-7">
                                                    <?php if ($pengguna_jenkel == 'L') : ?>
                                                        <div class="radio radio-info radio-inline">
                                                            <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
                                                            <label for="inlineRadio1"> Laki-Laki </label>
                                                        </div>
                                                        <div class="radio radio-info radio-inline">
                                                            <input type="radio" id="inlineRadio1" value="P" name="xjenkel">
                                                            <label for="inlineRadio2"> Perempuan </label>
                                                        </div>
                                                    <?php else : ?>
                                                        <div class="radio radio-info radio-inline">
                                                            <input type="radio" id="inlineRadio1" value="L" name="xjenkel">
                                                            <label for="inlineRadio1"> Laki-Laki </label>
                                                        </div>
                                                        <div class="radio radio-info radio-inline">
                                                            <input type="radio" id="inlineRadio1" value="P" name="xjenkel" checked>
                                                            <label for="inlineRadio2"> Perempuan </label>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputUserName" class="col-sm-4 control-label">Username</label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="xusername" class="form-control" value="<?php echo $pengguna_username; ?>" id="inputUserName" placeholder="Username" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
                                                <div class="col-sm-7">
                                                    <input type="password" name="xpassword" class="form-control" id="inputPassword3" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword4" class="col-sm-4 control-label">Ulangi Password</label>
                                                <div class="col-sm-7">
                                                    <input type="password" name="xpassword2" class="form-control" id="inputPassword4" placeholder="Ulangi Password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputUserName" class="col-sm-4 control-label">Kontak Person</label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="xkontak" class="form-control" value="<?php echo $pengguna_nohp; ?>" id="inputUserName" placeholder="Kontak Person" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputUserName" class="col-sm-4 control-label">Level</label>
                                                <div class="col-sm-7">
                                                    <select class="form-control" name="xlevel" required>
                                                        <option value="1" <?= $pengguna_level == '1' ? 'selected' : '' ?>>Head Office</option>
                                                        <option value="2" <?= $pengguna_level == '2' ? 'selected' : '' ?>>Cabang</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputUserName" class="col-sm-4 control-label">Photo</label>
                                                <div class="col-sm-7">
                                                    <input type="file" name="filefoto" />
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

    <!--Modal Reset Password-->
    <div class="modal fade" id="ModalResetPassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Reset Password</h4>
                </div>

                <div class="modal-body">

                    <table>
                        <tr>
                            <th style="width:120px;">Username</th>
                            <th>:</th>
                            <th><?php echo $this->session->flashdata('uname'); ?></th>
                        </tr>
                        <tr>
                            <th style="width:120px;">Password Baru</th>
                            <th>:</th>
                            <th><?php echo $this->session->flashdata('upass'); ?></th>
                        </tr>
                    </table>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

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