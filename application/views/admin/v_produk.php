<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('admin/v_head')?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <?php
      $this->load->view('admin/v_header');
    ?>
        </header>
        <aside class="main-sidebar">
            <?php $this->load->view('admin/v_sidebar')?>
        </aside>
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Daftar Produk
                    <small>S Plus Indonesia</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Produk</li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <form class="form-inline" action="<?=base_url('admin/produk/pdf')?>" method="GET">
                                    <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span
                                        class="fa fa-plus"></span> Tambah Produk</a>
                                    <div class="form-group">
                                        <select name="kategori" class="form-control">
                                            <option value="all">Pilih Kategori</option>
                                            <?php $kategori = $this->db->get('tbl_kategori')->result(); ?>
                                            <?php foreach($kategori as $k): ?>
                                            <option value="<?=$k->kategori_id?>"><?=$k->kategori_nama?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <button stype="submit" class="btn btn-default btn-flat"><span
                                        class="fa fa-print"></span> Cetak</button>
                                </form>
                                
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-striped" style="font-size:13px;">
                                    <thead>
                                        <tr>
                                            <th>Gambar</th>
                                            <th>Nama</th>
                                            <th>Type</th>
                                            <th>Warna</th>
                                            <th>Kategori</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th style="text-align:right;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=0;
                                        foreach ($data->result_array() as $i) :
                                        $no++;
                                        $produk_id=$i['produk_id'];
                                        $produk_judul=$i['produk_judul'];
                                        $produk_type=$i['produk_type'];
                                        $produk_warna=$i['produk_warna'];
                                        $produk_author=$i['produk_author'];
                                        $produk_gambar=$i['produk_gambar'];
                                        $produk_kategori_id=$i['produk_kategori_id'];
                                        $produk_kategori_nama=$i['kategori_nama'];
                                        $produk_deskripsi=$i['produk_deskripsi'];
                                        $harga=$i['produk_harga'];
                                        $stok=$i['produk_stok'];
                                        ?>
                                        <tr>
                                            <td><img src="<?php echo base_url().'assets/user/images/produk/'.$produk_gambar;?>"
                                                    style="width:80px;"></td>
                                            <td><?php echo $produk_judul;?></td>
                                            <td><?php echo $produk_type;?></td>
                                            <td><?php echo $produk_warna;?></td>
                                            <td><?php echo $produk_kategori_nama;?></td>
                                            <td>Rp <?php echo number_format($harga);?></td>
                                            <td><?php echo $stok;?></td>
                                            <td style="text-align:right;">
                                                <a class="btn" data-toggle="modal"
                                                    data-target="#ModalEdit<?php echo $produk_id;?>"><span
                                                        class="fa fa-pencil"></span></a>
                                                <a class="btn" data-toggle="modal"
                                                    data-target="#ModalHapus<?php echo $produk_id;?>"><span
                                                        class="fa fa-trash"></span></a>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div> <!-- /.box-body -->
                        </div> <!-- /.box -->
                    </div> <!-- /.col -->
                </div> <!-- /.row -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php $this->load->view('admin/v_footer') ?>

        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!--Modal Tambah Produk-->
    <div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Produk</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url().'admin/produk/simpan_produk'?>"
                    method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Nama Produk</label>
                            <div class="col-sm-7">
                                <input type="text" name="xjudul" class="form-control" placeholder="Nama Produk"
                                    required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Kategori</label>
                            <div class="col-sm-7">

                                <select class="form-control" name="xkategori" id="xkategori_suggest"
                                    style="width: 100%;" required>
                                    <option value="">-Pilih-</option>
                                    <?php
                                            $no=0;
                                            foreach ($alb->result_array() as $a) :
                                                $no++;
                                                $alb_id=$a['kategori_id'];
                                                $alb_nama=$a['kategori_nama'];
                                            ?>
                                    <option value="<?php echo $alb_id;?>"><?php echo $alb_nama;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Type Produk</label>
                            <div class="col-sm-4">
                                <input type="text" name="xtype" class="form-control" id="type" placeholder="Type Produk"
                                    data-toggle="tooltip" title="Isi manual jika tidak ada data pada pilihan type!"
                                    required>
                            </div>
                            <div class="col-sm-3">
                                <select id="xtype_suggestion" class="form-control" data-toggle="tooltip"
                                    title="Pilih jika ada data!">
                                    <option value="null">Pilihan Type</option>
                                </select>
                            </div>
                        </div>

                        <!-- ajax get produk type -->
                        <script>
                        $('#xkategori_suggest').change(function() {
                            var id = $(this).val();
                            $.get("<?=base_url('admin/produk/ajax_get_type/')?>" + id, function(response) {
                                if (response !== 'empty') {
                                    $('#xtype_suggestion').html(
                                        '<option value="null">Pilihan Type</option>');
                                    $('#xtype_suggestion').append(response);
                                } else {
                                    $('#xtype_suggestion').html(
                                        '<option value="null">Pilihan Type</option>');
                                }
                            });
                        });

                        $('#xtype_suggestion').change(function() {
                            var type = $(this).val();
                            if (type !== 'null') {
                                $('#type').val(type);
                            }
                        })
                        </script>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Deskripsi Produk</label>
                            <div class="col-sm-7">
                                <textarea id="ckeditor" name="xdeskripsi" class="form-control ckedit"
                                    placeholder="Deskripsi" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Deskripsi Tambahan</label>
                            <div class="col-sm-7">
                                <textarea id="ckeditor" name="xdeskripsi_tambahan" class="form-control ckedit"
                                    placeholder="Deskripsi" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Panduan Instalasi</label>
                            <div class="col-sm-7">
                                <textarea id="ckeditor" name="xdeskripsi_instalasi" class="form-control ckedit"
                                    placeholder="Deskripsi" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Harga Produk</label>
                            <div class="col-sm-7">
                                <input type="text" name="xharga" class="form-control" placeholder="Harga" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Warna Produk</label>
                            <div class="col-sm-7">
                                <input type="text" name="xwarna" class="form-control" placeholder="Warna Produk"
                                    required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Stok Produk</label>
                            <div class="col-sm-7">
                                <input type="text" name="xstok" class="form-control" placeholder="Stok Produk" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Gambar Produk</label>
                            <div class="col-sm-1">
                                <span class="btn btn-default btn-file">
                                    <i class="fa fa-file-image-o" style="padding-top:12px;"></i> 
                                    <input type="file"
                                        name="filefoto" required />
                                </span>
                            </div>
                            <input type="hidden" id="imgcount" value="1">
                            <div class="col-sm-6" style="margin-left:5px;" id="imglist"></div>
                        </div>

                        <!-- <div class="form-group">
                            <div class="col-sm-12">
                                <center><button type="button" class="btn btn-default"><i class="fa fa-plus"></i> Tambah
                                        Variasi</button></center>
                            </div>
                        </div>
                        <hr>

                        <div class="form-group row">
                            <div class="col-sm-2" style="padding-top:8px;">
                                <center>variasi 1</center>
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" placeholder="Warna produk">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" placeholder="Stok produk">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Harga produk">
                            </div>
                        </div> -->

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
    var _URL = window.URL || window.webkitURL;
    $("#imgupload").change(function(e) {
        var file, img;
        if ((file = this.files[0])) {
            img = new Image();
            img.onload = function() {
                if (this.width >= 500 && this.height >= 500) {
                    alert('Ukuran gambar harus 1500 x 1500');
                } else {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        var imgcount = $('#imgcount').val();
                        if (Number(imgcount) > 5) {
                            alert("Maksimal gambar upload adalah 5");
                        } else {
                            var pls = '<div class="imglist">\
                                        <img src="' + e.target.result + '" width="50px">\
                                        <div class="imgremove">\
                                            <input type="text" name="filesimages[]" value="' + e.target.result + '" style="display:none">\
                                            <a href="#" class="rmimage"><i class="fa fa-remove"></i></span>\
                                        </div>\
                                       </div>';
                            $('#imglist').append(pls);
                            $('#imgcount').val(Number(imgcount) + 1);

                            $(".rmimage").click(function() {
                                $(this).parent().parent().remove();
                                $('#imgcount').val(Number(imgcount) - 1);
                            });
                        }
                    };
                    reader.readAsDataURL(file);
                }
            };
            img.onerror = function() {
                alert("not a valid file: " + file.type);
            };

            img.src = _URL.createObjectURL(file);
        }
    });
    </script>

    <!--Modal Edit produk-->
    <?php foreach ($data->result_array() as $i) :
              $produk_id=$i['produk_id'];
              $produk_judul=$i['produk_judul'];
              $produk_type=$i['produk_type'];
              $produk_warna=$i['produk_warna'];
              $produk_deskripsi=$i['produk_deskripsi'];
              $harga=$i['produk_harga'];
              $stok=$i['produk_stok'];
              $produk_tanggal=$i['tanggal'];
              $produk_author=$i['produk_author'];
              $produk_gambar=$i['produk_gambar'];
              $produk_kategori_id=$i['produk_kategori_id'];
              $produk_kategori_nama=$i['kategori_nama'];
            ?>

    <div class="modal fade" id="ModalEdit<?php echo $produk_id;?>" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Produk</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url().'admin/produk/update_produk'?>"
                    method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="kode" value="<?php echo $produk_id;?>" />
                        <input type="hidden" value="<?php echo $produk_gambar;?>" name="gambar">
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Nama Produk</label>
                            <div class="col-sm-7">
                                <input type="text" name="xjudul" class="form-control"
                                    value="<?php echo $produk_judul;?>" placeholder="Judul" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Type Produk</label>
                            <div class="col-sm-7">
                                <input type="text" name="xtype" class="form-control" value="<?php echo $produk_type;?>"
                                    placeholder="Type" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Warna Produk</label>
                            <div class="col-sm-7">
                                <input type="text" name="xwarna" class="form-control"
                                    value="<?php echo $produk_warna;?>" placeholder="Warna" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Deskripsi Produk</label>
                            <div class="col-sm-7">
                                <textarea name="xdeskripsi" class="form-control ckedit" placeholder="Deskripsi"
                                    required><?php echo $produk_deskripsi;?></textarea>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Harga Produk</label>
                            <div class="col-sm-7">
                                <input type="text" name="xharga" class="form-control" value="<?php echo $harga;?>"
                                    placeholder="Harga" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Stok Produk</label>
                            <div class="col-sm-7">
                                <input type="text" name="xstok" class="form-control" value="<?php echo $stok;?>"
                                    placeholder="Stok" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Kategori</label>
                            <div class="col-sm-7">

                                <select class="form-control" name="xkategori" style="width: 100%;" required>
                                    <option value="">-Pilih-</option>
                                    <?php
                                              foreach ($alb->result_array() as $a) {
                                                           $alb_id=$a['kategori_id'];
                                                           $alb_nama=$a['kategori_nama'];
                                                           if($produk_kategori_id==$alb_id)
                                                              echo "<option value='$alb_id' selected>$alb_nama</option>";
                                                           else
                                                              echo "<option value='$alb_id'>$alb_nama</option>";
                                                        }?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Gambar Produk</label>
                            <div class="col-sm-7">
                                <input type="file" name="filefoto" class="filefoto" />
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php endforeach;?>

    <!--Modal Edit kategori-->

    <?php foreach ($data->result_array() as $i) :
              $produk_id=$i['produk_id'];
              $produk_judul=$i['produk_judul'];
              $produk_tanggal=$i['tanggal'];
              $produk_author=$i['produk_author'];
              $produk_gambar=$i['produk_gambar'];
              $produk_kategori_id=$i['produk_kategori_id'];
              $produk_kategori_nama=$i['kategori_nama'];
            ?>
    <!--Modal Hapus Pengguna-->
    <div class="modal fade" id="ModalHapus<?php echo $produk_id;?>" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Hapus Produk</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url().'admin/produk/hapus_produk'?>" method="post"
                    enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="kode" value="<?php echo $produk_id;?>" />
                        <input type="hidden" value="<?php echo $produk_gambar;?>" name="gambar">
                        <input type="hidden" value="<?php echo $produk_kategori_id;?>" name="kategori">
                        <p>Apakah Anda yakin mau menghapus Produk <b><?php echo $produk_judul;?></b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php endforeach;?>

    <script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
    <script>
    $('.ckedit').summernote({
        height: 100,
        toolbar: []
    });
    </script>
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
        text: "Produk Berhasil disimpan ke database.",
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
        text: "Produk berhasil di update",
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
        text: "Produk Berhasil dihapus.",
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