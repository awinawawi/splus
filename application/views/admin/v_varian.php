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
                                                <th>gambar</th>
                                                <th>Nama Produk</th>
                                                <th>kategori</th>
                                                <th>subkategori</th>
                                                <th>kelas</th>
                                                <th>Harga Jual</th>
                                                <th>Diskon</th>
                                                <th>stok</th>
                                                <th style="text-align:right;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 0;
                                            foreach ($data->result_array() as $i) :
                                                $no++;
                                                $varian_id = $i['varian_id'];
                                                $varian_cover = $i['varian_cover'];
                                                $varian_nama = $i['varian_nama'];
                                                $kategori_nama = $i['kategori_nama'];
                                                $subkategori_nama = $i['subkategori_nama'];
                                                $kelas_nama = $i['kelas_nama'];
                                                $harga_konsumen = $i['harga_konsumen'];
                                                $diskon = $i['diskon'];
                                                $stok = $i['stok'];

                                            ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><img src="<?php echo base_url() . 'assets/user/images/galeri/all_produk/' . $varian_cover; ?>" style="width:80px;"></td>
                                                    <td><?php echo $varian_nama; ?></td>
                                                    <td><?php echo $kategori_nama; ?></td>
                                                    <td><?php echo $subkategori_nama; ?></td>
                                                    <td><?php echo $kelas_nama; ?></td>
                                                    <td><?php echo $harga_konsumen; ?></td>
                                                    <td><?php echo $diskon; ?></td>
                                                    <td><?php echo $stok; ?></td>
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
                            <label for="inputUserName" class="col-sm-4 control-label">kategori</label>
                            <div class="col-sm-7">
                                <select class="form-control" name="kategori" style="width: 100%;" required>
                                    <option value="">-Pilih-</option>
                                    <?php
                                    $no = 0;
                                    foreach ($kategori->result_array() as $a) :
                                        $no++;
                                        $alb_id = $a['kategori_id'];
                                        $alb_nama = $a['kategori_nama'];
                                    ?>
                                        <option value="<?php echo $alb_id; ?>"><?php echo $alb_nama; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Subkategori</label>
                            <div class="col-sm-7">

                                <select class="form-control" name="subkategori" style="width: 100%;" required>
                                    <option value="">-Pilih-</option>
                                    <?php
                                    $no = 0;
                                    foreach ($subkategori->result_array() as $a) :
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
                        <!-- <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Brand</label>
                            <div class="col-sm-7">

                                <select class="form-control" name="brand" style="width: 100%;" required>
                                    <option value="">-Pilih-</option>
                                    <?php
                                    $no = 0;
                                    foreach ($brand->result_array() as $a) :
                                        $no++;
                                        $alb_id = $a['brand_id'];
                                        $alb_nama = $a['brand'];
                                    ?>
                                        <option value="<?php echo $alb_id; ?>"><?php echo $alb_nama; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div> -->

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Brand</label>
                            <div class="col-sm-7">
                                <select class="form-control" name="brand" required>
                                    <option value="1">SPLUS</option>
                                    <option value="2">NAMO</option>
                                    <option value="3">IROOM</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Nama Produk</label>
                            <div class="col-sm-7">
                                <input type="text" name="nama_varian" class="form-control" id="inputUserName" placeholder="Nama varian" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">satuan</label>
                            <div class="col-sm-7">
                                <input type="text" name="satuan" class="form-control" id="inputUserName" placeholder="satuan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Berat</label>
                            <div class="col-sm-7">
                                <input type="text" name="berat" class="form-control" id="inputUserName" placeholder="Berat" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Harga Konsumen</label>
                            <div class="col-sm-7">
                                <input type="text" name="harga" class="form-control" id="inputUserName" placeholder="harga Konsumen" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Diskon</label>
                            <div class="col-sm-7">
                                <input type="text" name="diskon" class="form-control" id="inputUserName" placeholder="Diskon" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Stok</label>
                            <div class="col-sm-7">
                                <input type="text" name="stok" class="form-control" id="inputUserName" placeholder="stok" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">warna</label>
                            <div class="col-sm-7">
                                <input type="text" name="warna" class="form-control" id="inputUserName" placeholder="warna" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Keterangan</label>
                            <div class="col-sm-7">
                                <textarea id="ckeditor" name="deskripsi_varian" class="form-control ckedit" placeholder="Keterangan" required></textarea>
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">gambar warna</label>
                            <div class="col-sm-7">
                                <input type="file" name="filefoto" required />
                            </div>
                        </div> -->

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">gambar cover</label>
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

    <!--Modal Edit varian-->
    <?php foreach ($data->result_array() as $i) :
        $varian_id = $i['varian_id'];
        $varian_nama = $i['varian_nama'];
        $varian_deskripsi = $i['varian_deskripsi'];
        $varian_author = $i['varian_author'];
        $varian_cover = $i['varian_cover'];

        $harga = $i['harga_konsumen'];
        $diskon = $i['diskon'];
        $stok = $i['stok'];
        $satuan = $i['satuan'];
        $berat = $i['berat'];
        $warna = $i['varian_warna'];
        $produk_brand = $i['produk_brand'];


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
                                <label for="inputUserName" class="col-sm-4 control-label">kategori</label>
                                <div class="col-sm-7">
                                    <select class="form-control" name="kategori" style="width: 100%;" required>
                                        <option value="" selected>-Pilih-</option>
                                        <?php
                                        $no = 0;
                                        foreach ($kategori->result_array() as $a) :
                                            $no++;

                                            $alb_id = $a['kategori_id'];
                                            $alb_nama = $a['kategori_nama'];

                                        ?>
                                            <option value="<?php echo $alb_id; ?>"><?php echo $alb_nama; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Subkategori</label>
                                <div class="col-sm-7">

                                    <select class="form-control" name="subkategori" style="width: 100%;" required>
                                        <option value="">-Pilih-</option>
                                        <?php
                                        $no = 0;
                                        foreach ($subkategori->result_array() as $a) :
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
                            <!-- <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Brand</label>
                                <div class="col-sm-7">

                                    <select class="form-control" name="brand" style="width: 100%;" required>
                                        <option value="">-Pilih-</option>
                                        <?php
                                        $no = 0;
                                        foreach ($brand->result_array() as $a) :
                                            $no++;
                                            $alb_id = $a['brand_id'];
                                            $alb_nama = $a['brand'];
                                        ?>
                                            <option value="<?php echo $alb_id; ?>"><?php echo $alb_nama; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Brand</label>
                                <div class="col-sm-7">
                                    <select class="form-control" name="brand" required>
                                        <option value="1" <?= $produk_brand == '1' ? 'selected' : '' ?>>SPLUS</option>
                                        <option value="2" <?= $produk_brand == '2' ? 'selected' : '' ?>>NAMO</option>
                                        <option value="3" <?= $produk_brand == '3' ? 'selected' : '' ?>>IROOM</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nama Produk</label>
                                <div class="col-sm-7">
                                    <input type="text" name="varian_nama" class="form-control" value="<?php echo $varian_nama; ?>" id="inputUserName" placeholder="Nama varian" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">satuan</label>
                                <div class="col-sm-7">
                                    <input type="text" name="satuan" class="form-control" value="<?php echo $satuan; ?>" id="inputUserName" placeholder="satuan" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Berat</label>
                                <div class="col-sm-7">
                                    <input type="text" name="berat" class="form-control" value="<?php echo $berat; ?>" id="inputUserName" placeholder="berat" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Harga Konsumen</label>
                                <div class="col-sm-7">
                                    <input type="text" name="harga" class="form-control" value="<?php echo $harga; ?>" id="inputUserName" placeholder="harga" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Diskon</label>
                                <div class="col-sm-7">
                                    <input type="text" name="diskon" class="form-control" value="<?php echo $diskon; ?>" id="inputUserName" placeholder="diskon" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">stok</label>
                                <div class="col-sm-7">
                                    <input type="text" name="stok" class="form-control" value="<?php echo $stok; ?>" id="inputUserName" placeholder="stok" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">warna</label>
                                <div class="col-sm-7">
                                    <input type="text" name="warna" class="form-control" value="<?php echo $warna; ?>" id="inputUserName" placeholder="warna" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Deskripsi varian</label>
                                <div class="col-sm-7">
                                    <textarea name="varian_deskripsi" class="form-control ckedit" placeholder="Deskripsi varian" required><?php echo $varian_deskripsi; ?></textarea>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Cover gambar</label>
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