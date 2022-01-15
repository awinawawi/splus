<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('admin/v_head')?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <?php $this->load->view('admin/v_header'); ?>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <?php $this->load->view('admin/v_sidebar')?>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Kategori Produk
                    <small>S Plus Indonesia</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Kategori Produk</li>
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
                                    <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span
                                            class="fa fa-plus"></span> Tambah Kategori</a>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table id="example1" class="table table-striped" style="font-size:13px;">
                                        <thead>
                                            <tr>
                                                <th>Gambar</th>
                                                <th>Kategori</th>
                                                <th>Deskripsi</th>
                                                <th>Tanggal</th>
                                                <th>Author</th>
                                                <th>Jumlah</th>
                                                <th style="text-align:right;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                  					$no=0;
                  					foreach ($data->result_array() as $i) :
                  					   $no++;
                  					   $kategori_id=$i['kategori_id'];
                  					   $kategori_nama=$i['kategori_nama'];
                                       $kategori_deskripsi=$i['kategori_deskripsi'];
                  					   $kategori_tanggal=$i['tanggal'];
                  					   $kategori_author=$i['kategori_author'];
                  					   $kategori_cover=$i['kategori_cover'];
                  					   $kategori_jumlah=$i['kategori_count'];

                            ?>
                                            <tr>
                                                <td><img src="<?php echo base_url().'assets/user/images/galeri/'.$kategori_cover;?>"
                                                        style="width:80px;"></td>
                                                <td><?php echo $kategori_nama;?></td>
                                                <td><?php echo $kategori_deskripsi;?></td>
                                                <td><?php echo $kategori_tanggal;?></td>
                                                <td><?php echo $kategori_author;?></td>
                                                <td><?php echo $kategori_jumlah;?></td>
                                                <td style="text-align:right;">
                                                    <a class="btn" data-toggle="modal"
                                                        data-target="#ModalEdit<?php echo $kategori_id;?>"><span
                                                            class="fa fa-pencil"></span></a>
                                                    <a class="btn" data-toggle="modal"
                                                        data-target="#ModalHapus<?php echo $kategori_id;?>"><span
                                                            class="fa fa-trash"></span></a>
                                                </td>
                                            </tr>
                                            <?php endforeach;?>
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

    <!--Modal Add Kategori-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Kategori</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url().'admin/kategori/simpan_kategori'?>"
                    method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Nama Kategori</label>
                            <div class="col-sm-7">
                                <input type="text" name="xnama_kategori" class="form-control" id="inputUserName"
                                    placeholder="Nama Kategori" required>
                            </div>
                        </div>

                       <div class="form-group">
                           <label for="inputUserName" class="col-sm-4 control-label">Deskripsi Kategori</label>
                           <div class="col-sm-7">
                               <textarea id="ckeditor" name="xdeskripsi_kategori" class="form-control ckedit"
                                   placeholder="Deskripsi Kategori" required></textarea>
                           </div>
                       </div>

                       <div class="form-group">
                           <label for="inputUserName" class="col-sm-4 control-label">Cover Kategori</label>
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
              $kategori_id=$i['kategori_id'];
              $kategori_nama=$i['kategori_nama'];
              $kategori_deskripsi=$i['kategori_deskripsi'];
              $kategori_tanggal=$i['tanggal'];
              $kategori_author=$i['kategori_author'];
              $kategori_cover=$i['kategori_cover'];
              $kategori_jumlah=$i['kategori_count'];
            ?>

    <div class="modal fade" id="ModalEdit<?php echo $kategori_id;?>" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Kategori</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url().'admin/kategori/update_kategori'?>"
                    method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="kode" value="<?php echo $kategori_id;?>" />
                        <input type="hidden" value="<?php echo $kategori_cover;?>" name="gambar">
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Nama Kategori</label>
                            <div class="col-sm-7">
                                <input type="text" name="xnama_kategori" class="form-control"
                                    value="<?php echo $kategori_nama;?>" id="inputUserName" placeholder="Nama Kategori"
                                    required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Deskripsi Kategori</label>
                            <div class="col-sm-7">
                                <textarea name="xdeskripsi_kategori" class="form-control ckedit" placeholder="Deskripsi Kategori"
                                    required><?php echo $kategori_deskripsi;?></textarea>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Cover Kategori</label>
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
    <?php endforeach;?>
    <!--Modal Edit kategori-->

    <?php foreach ($data->result_array() as $i) :
              $kategori_id=$i['kategori_id'];
              $kategori_nama=$i['kategori_nama'];
              $kategori_deskripsi=$i['kategori_deskripsi'];
              $kategori_tanggal=$i['tanggal'];
              $kategori_author=$i['kategori_author'];
              $kategori_cover=$i['kategori_cover'];
              $kategori_jumlah=$i['kategori_count'];
            ?>
    <!--Modal Hapus Pengguna-->
    <div class="modal fade" id="ModalHapus<?php echo $kategori_id;?>" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Hapus Kategori</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url().'admin/kategori/hapus_kategori'?>"
                    method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="kode" value="<?php echo $kategori_id;?>" />
                        <input type="hidden" value="<?php echo $kategori_cover;?>" name="gambar">
                        <p>Apakah Anda yakin mau menghapus Kategori Produk <b><?php echo $kategori_nama;?></b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php endforeach;?>

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
    <?php if($this->session->flashdata('msg')=='error'):?>
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

    <?php elseif($this->session->flashdata('msg')=='success'):?>
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
    <?php elseif($this->session->flashdata('msg')=='info'):?>
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
    <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
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
    <?php else:?>

    <?php endif;?>
</body>

</html>