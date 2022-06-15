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
                    Kelas Produk
                    <small>S Plus Indonesia</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Kelas Produk</li>
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

                                        <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Tambah Kelas</a>
                                        <!-- <div class="form-group">
                                            <select id="show" name="kategori" class="form-control">
                                                <option value="all">Pilih Kategori</option>
                                                <?php $kategori = $this->db->get('tbl_kategori')->result(); ?>
                                                <?php foreach ($kategori as $k) : ?>
                                                    <option value="<?= $k->kategori_id ?>"><?= $k->kategori_nama ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div> -->

                                        <div class="form-group">
                                            <select id="show" class="form-control" name="kategori" style="width: 105%;">
                                                <option value="all">-All Subkategori-</option>
                                                <?php
                                                $no = 0;
                                                foreach ($alb->result_array() as $a) :
                                                    $no++;
                                                    $alb_id = $a['subkategori_id'];
                                                    $alb_nama = $a['subkategori_nama'];
                                                ?>
                                                    <option value="<?php echo $alb_id; ?>"><?php echo $alb_nama; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                        <script>
                                            $('#show').change(function() {
                                                window.location = '<?= base_url('admin/produk/filter') ?>/' + $(this).val();
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
                                                <th>kelas</th>
                                                <th>Subkategori</th>
                                                <th>Author</th>
                                                <th style="text-align:right;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 0;
                                            foreach ($data->result_array() as $i) :
                                                $no++;
                                                $kelas_id = $i['kelas_id'];
                                                $kelas_nama = $i['kelas_nama'];
                                                $subkategori_nama = $i['subkategori_nama'];
                                                $kelas_author = $i['kelas_author'];
                                                $kelas_cover = $i['kelas_cover'];
                                            ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><img src="<?php echo base_url() . 'assets/user/images/galeri/all_produk/' . $kelas_cover; ?>" style="width:80px;"></td>
                                                    <td><?php echo $kelas_nama; ?></td>
                                                    <td><?php echo $subkategori_nama; ?></td>
                                                    <td><?php echo $kelas_author; ?></td>
                                                    <td style="text-align:right;">
                                                        <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $kelas_id; ?>"><span class="fa fa-pencil"></span></a>
                                                        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $kelas_id; ?>"><span class="fa fa-trash"></span></a>
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

    <!--Modal Add SubKategori-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Kelas</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url() . 'admin/Produk/simpan_kelas' ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Subkategori</label>
                            <div class="col-sm-7">

                                <select class="form-control" name="kategori" style="width: 100%;" required>
                                    <option value="">-Pilih-</option>
                                    <?php
                                    $no = 0;
                                    foreach ($alb->result_array() as $a) :
                                        $no++;
                                        $alb_id = $a['subkategori_id'];
                                        $alb_nama = $a['subkategori_nama'];
                                    ?>
                                        <option value="<?php echo $alb_id; ?>"><?php echo $alb_nama; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Nama kelas</label>
                            <div class="col-sm-7">
                                <input type="text" name="nama_kelas" class="form-control" id="inputUserName" placeholder="Nama Kelas" required>
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Deskripsi Kelas</label>
                            <div class="col-sm-7">
                                <textarea id="ckeditor" name="deskripsi_kelas" class="form-control ckedit" placeholder="Deskripsi kelas" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Cover Subkategori</label>
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
        $kelas_id = $i['kelas_id'];
        $kelas_nama = $i['kelas_nama'];
        $kelas_deskripsi = $i['kelas_deskripsi'];
        $kelas_author = $i['kelas_author'];
        $kelas_cover = $i['kelas_cover'];


    ?>

        <div class="modal fade" id="ModalEdit<?php echo $kelas_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit kelas</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url() . 'admin/Produk/update_kelas' ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="hidden" name="kode" value="<?php echo $kelas_id; ?>" />
                            <input type="hidden" value="<?php echo $kelas_cover; ?>" name="gambar">
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">SubKategori</label>
                                <div class="col-sm-7">

                                    <select class="form-control" name="kategori" style="width: 100%;" required>
                                        <option value="">-Pilih-</option>
                                        <?php
                                        $no = 0;
                                        foreach ($alb->result_array() as $a) :
                                            $no++;
                                            $alb_id = $a['subkategori_id'];
                                            $alb_nama = $a['subkategori_nama'];
                                        ?>
                                            <option value="<?php echo $alb_id; ?>"><?php echo $alb_nama; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nama Kelas</label>
                                <div class="col-sm-7">
                                    <input type="text" name="kelas_nama" class="form-control" value="<?php echo $kelas_nama; ?>" id="inputUserName" placeholder="Nama Kelas" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Deskripsi kelas</label>
                                <div class="col-sm-7">
                                    <textarea name="kelas_deskripsi" class="form-control ckedit" placeholder="Deskripsi Kelas" required><?php echo $kelas_deskripsi; ?></textarea>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Cover Kelas</label>
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
        $kelas_id = $i['kelas_id'];
        $kelas_nama = $i['kelas_nama'];
        $kelas_deskripsi = $i['kelas_deskripsi'];
        $kelas_author = $i['kelas_author'];
        $kelas_cover = $i['kelas_cover'];
    ?>
        <!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $kelas_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Kelas</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url() . 'admin/Produk/hapus_kelas' ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="hidden" name="kode" value="<?php echo $kelas_id; ?>" />
                            <input type="hidden" value="<?php echo $kelas_cover; ?>" name="gambar">
                            <p>Apakah Anda yakin mau menghapus kelas Produk <b><?php echo $kelas_nama; ?></b> ?</p>

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