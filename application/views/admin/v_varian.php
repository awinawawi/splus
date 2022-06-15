<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('admin/v_head') ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <?php $this->load->view('admin/v_header'); ?>
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
                    Varian Produk
                    <small>S Plus Indonesia</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Varian Produk</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">

                            <div class="box">
                                <div class="box-header">
                                    <form class="form-inline" action="<?= base_url('admin/produk/pdf') ?>" method="GET">
                                        <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Tambah Varian</a>
                                        <div class="form-group">
                                            <select id="show" class="form-control" name="kelas" style="width: 105%;">
                                                <option value="all">-All-</option>
                                                <?php
                                                $no = 0;
                                                foreach ($alb->result_array() as $a) :
                                                    $no++;
                                                    $alb_id = $a['kelas_id'];
                                                    $alb_nama = $a['kelas_nama'];
                                                ?>
                                                    <option value="<?php echo $alb_id; ?>"><?php echo $alb_nama; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                        <script>
                                            $('#show').change(function() {
                                                window.location = '<?= base_url('admin/varian/filter') ?>/' + $(this).val();
                                            });
                                        </script>
                                        <?php if ($filter = $this->uri->segment(4)) : ?>
                                            <script>
                                                $('#show option[value="<?= $filter ?>"]').attr('selected', 'selected')
                                            </script>
                                        <?php endif; ?>

                                        <!-- <button stype="submit" class="btn btn-default btn-flat"><span class="fa fa-print"></span> Cetak</button> -->
                                    </form>

                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table id="example1" class="table table-striped" style="font-size:13px;">
                                        <thead>
                                            <tr>
                                                <th style="width: 5%">No</th>
                                                <th>Gambar</th>
                                                <th>Tipe Varian(produk)</th>
                                                <th>kelas</th>
                                                <th>Author</th>
                                                <th style="text-align:right;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 0;
                                            foreach ($data->result_array() as $i) :
                                                $no++;
                                                $varian_id = $i['varian_id'];
                                                $varian_nama = $i['varian_nama'];
                                                $kelas_nama = $i['kelas_nama'];
                                                $varian_author = $i['varian_author'];
                                                $varian_cover = $i['varian_cover'];
                                            ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><img src="<?php echo base_url() . 'assets/user/images/galeri/all_produk/' . $varian_cover; ?>" style="width:80px;"></td>
                                                    <td><?php echo $varian_nama; ?></td>
                                                    <td><?php echo $kelas_nama; ?></td>
                                                    <td><?php echo $varian_author; ?></td>
                                                    <td style="text-align:right;">
                                                        <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $varian_id; ?>"><span class="fa fa-pencil"></span></a>
                                                        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $varian_id; ?>"><span class="fa fa-trash"></span></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php $this->load->view('admin/v_footer') ?>

    </div>
    <!-- ./wrapper -->

    <!--Modal Add varian-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Tambah varian</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url() . 'admin/Varian/simpan_varian_new' ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">kelas</label>
                            <div class="col-sm-7">

                                <select class="form-control" name="kelas" style="width: 100%;" required>
                                    <option value="">-Pilih-</option>
                                    <?php
                                    $no = 0;
                                    foreach ($alb->result_array() as $a) :
                                        $no++;
                                        $alb_id = $a['kelas_id'];
                                        $alb_nama = $a['kelas_nama'];
                                    ?>
                                        <option value="<?php echo $alb_id; ?>"><?php echo $alb_nama; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Tipe varian</label>
                            <div class="col-sm-7">
                                <input type="text" name="nama_varian" class="form-control" id="inputUserName" placeholder="Nama varian" required>
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Deskripsi varian</label>
                            <div class="col-sm-7">
                                <textarea id="ckeditor" name="deskripsi_varian" class="form-control ckedit" placeholder="Deskripsi varian" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Cover varian</label>
                            <div class="col-sm-7">
                                <input type="file" name="filefoto" required />
                            </div>
                        </div>




                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Modal Edit kategori-->
    <?php foreach ($data->result_array() as $i) :
        $varian_id = $i['varian_id'];
        $varian_nama = $i['varian_nama'];
        $varian_deskripsi = $i['varian_deskripsi'];
        $varian_author = $i['varian_author'];
        $varian_cover = $i['varian_cover'];


    ?>

        <div class="modal fade" id="ModalEdit<?php echo $varian_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Varian</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url() . 'admin/Varian/update_varian_new' ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="hidden" name="kode" value="<?php echo $varian_id; ?>" />
                            <input type="hidden" value="<?php echo $varian_cover; ?>" name="gambar">
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">kelas</label>
                                <div class="col-sm-7">

                                    <select class="form-control" name="kelas" style="width: 100%;" required>
                                        <option value="">-Pilih-</option>
                                        <?php
                                        $no = 0;
                                        foreach ($alb->result_array() as $a) :
                                            $no++;
                                            $alb_id = $a['kelas_id'];
                                            $alb_nama = $a['kelas_nama'];
                                        ?>
                                            <option value="<?php echo $alb_id; ?>"><?php echo $alb_nama; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nama varian</label>
                                <div class="col-sm-7">
                                    <input type="text" name="varian_nama" class="form-control" value="<?php echo $varian_nama; ?>" id="inputUserName" placeholder="Nama varian" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Deskripsi varian</label>
                                <div class="col-sm-7">
                                    <textarea name="varian_deskripsi" class="form-control ckedit" placeholder="Deskripsi varian" required><?php echo $varian_deskripsi; ?></textarea>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Cover varian</label>
                                <div class="col-sm-7">
                                    <input type="file" name="filefoto" />
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!--Modal Edit kategori-->

    <?php foreach ($data->result_array() as $i) :
        $varian_id = $i['varian_id'];
        $varian_nama = $i['varian_nama'];
        $varian_deskripsi = $i['varian_deskripsi'];
        $varian_author = $i['varian_author'];
        $varian_cover = $i['varian_cover'];
    ?>
        <!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $varian_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus varian</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url() . 'admin/Varian/hapus_varian_new' ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="hidden" name="kode" value="<?php echo $varian_id; ?>" />
                            <input type="hidden" value="<?php echo $varian_cover; ?>" name="gambar">
                            <p>Apakah Anda yakin mau menghapus varian Produk <b><?php echo $varian_nama; ?></b> ?</p>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <script>
        $(function() {
            $('#example1').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
            $('#example1_filter').addClass('pull-right');
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

    <?php elseif ($this->session->flashdata('msg') == 'success') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "Kategori Berhasil disimpan ke database.",
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
                text: "Kategori berhasil di update",
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
                text: "Kategori Berhasil dihapus.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
        </script>
    <?php else : ?>

    <?php endif; ?>
</body>

</html>