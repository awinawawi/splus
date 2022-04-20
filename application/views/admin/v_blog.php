<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('admin/v_head') ?>
    <style>
        .dataTables_filter {
            float: right !important
        }
    </style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <?php $this->load->view('admin/v_header'); ?>
        </header>
        <aside class="main-sidebar">
            <?php $this->load->view('admin/v_sidebar') ?>
        </aside>
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Blog
                    <small>S Plus Indonesia</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Blog</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="row">
                    <div class="col-xs-12">

                        <div class="box">
                            <div class="box-header">
                                <div class="row">
                                    <div class="col-md-1">
                                        <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Add Photo</a>
                                    </div>
                                    <div class="col-md-3" style="margin-left: 20px;">
                                        <select id="show" class="form-control col-md-6">
                                            <option value="semua">Semua Galeri S-Plus</option>
                                            <option value='pintu'>Pintu ABS & UPVC</option>
                                            <option value='namo'>Namo</option>
                                            <option value='jendela'>Jendela UPVC</option>
                                            <option value='plafon'>Plafon UPVC</option>
                                            <option value='wpc'>WPC</option>
                                            <option value='shade'>Sun SHade</option>
                                            <option value='solid'>Solid Surface</option>
                                            <option value='kitchen'>Kitchen Set</option>
                                            <option value='aktifitas'>Kegiatan S-Plus</option>
                                        </select>
                                        <script>
                                            $('#show').change(function() {
                                                window.location = '<?= base_url('admin/galeri/filter') ?>/' + $(this).val();
                                            });
                                        </script>
                                        <?php if ($filter = $this->uri->segment(4)) : ?>
                                            <script>
                                                $('#show option[value="<?= $filter ?>"]').attr('selected', 'selected')
                                            </script>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-striped" style="font-size:13px;">
                                    <thead>
                                        <tr>
                                            <th>Gambar</th>
                                            <th>Judul</th>
                                            <th>Kategori</th>
                                            <th></th>
                                            <th>Tanggal</th>
                                            <th style="text-align:right;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 0;
                                        foreach ($data as $i) : $no++;
                                        ?>
                                            <tr>
                                                <td width="1"><img src="<?php echo base_url() . 'assets/user/images/galeri/' . $i->galeri_kategori . '/' . $i->galeri_gambar; ?>" style="width:40px;"></td>
                                                <td><?= $i->galeri_judul ?></td>
                                                <td><?= ucwords($i->galeri_kategori) ?></td>
                                                <td><?= empty($i->galeri_subkategori) ? '' : ucwords($i->galeri_subkategori) ?></td>
                                                <td><?= date_format(date_create($i->galeri_tanggal), 'd M Y') ?></td>
                                                <td style="text-align:right;">
                                                    <a class="btn btn-edit" data-toggle="modal" data-target="#ModalEdit" data-id="<?= $i->galeri_id ?>" data-j="<?= $i->galeri_judul ?>" data-k="<?= $i->galeri_kategori ?>" data-s="<?= $i->galeri_subkategori ?>"><span class="fa fa-pencil"></span></a>
                                                    <a class="btn btn-hapus" data-toggle="modal" data-target="#ModalHapus" data-id="<?= $i->galeri_id ?>"><span class="fa fa-trash"></span></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php $this->load->view('admin/v_footer') ?>
        <div class="control-sidebar-bg"></div>
    </div>

    <!--Modal Add Galeri-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document" style="width:80% !important">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Posting Artikel</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url() . 'admin/galeri/simpan_galeri' ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-1 control-label">Judul</label>
                            <div class="col-sm-4">
                                <input type="text" name="judul" id="judul" class="form-control" placeholder="Judul" required>
                            </div>
                            <div class="input-group col-sm-6">
                                <span class="input-group-addon">http://localhost/splus/blog/</span>
                                <input type="text" name="slug" id="slug" required readonly class="form-control" aria-describedby="basic-addon3">
                            </div>
                        </div>
                        <div class="form-group">

                        </div>
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Kategori</label>
                            <div class="col-sm-7">
                                <input type="hidden" name="xkategori" id="xkategori" value="pintu">
                                <select class="form-control" id="select_kategori" style="width: 100%;" required>
                                    <option value='pintu'>Pintu ABS & UPVC</option>
                                    <option value='namo'>Namo</option>
                                    <option value='jendela'>Jendela UPVC</option>
                                    <option value='plafon'>Plafon UPVC</option>
                                    <option value='wpc'>WPC</option>
                                    <option value='shade'>Sun SHade</option>
                                    <option value='solid'>Solid Surface</option>
                                    <option value='kitchen'>Kitchen Set</option>
                                    <option value='aktifitas'>Kegiatan S-Plus</option>
                                </select>
                            </div>
                        </div>
                        <script>
                            $('#select_kategori').change(function() {
                                $v = $(this).val()
                                $('#xkategori').val($v);
                                if ($v == 'aktifitas') {
                                    $('#vkegiatan').css('display', 'block');
                                } else {
                                    $('#vkegiatan').css('display', 'none');
                                }
                            })
                        </script>
                        <div class="form-group" id="vkegiatan" style="display:none">
                            <label for="inputUserName" class="col-sm-4 control-label">Aktifitas</label>
                            <div class="col-sm-7">
                                <?php $subcat = $this->db->group_by('galeri_subkategori')->get('tbl_galeri')->result(); ?>
                                <select class="form-control" id="select_subkategori" <?= empty($subcat) ? 'style="display:none"' : 'style="display:block"' ?> required>
                                    <?php foreach ($subcat as $subcat) : if (!empty($subcat->galeri_subkategori)) : ?>
                                            <option><?= $subcat->galeri_subkategori ?></option>
                                    <?php endif;
                                    endforeach; ?>
                                    <option>Buat Baru..</option>
                                </select>
                                <input type="text" name="xsubkategori" id="xsubkategori" class="form-control" <?= empty($subcat) ? 'style="display:block"' : 'style="display:none; margin-top:10px;"' ?> placeholder="Tambah aktifitas baru">
                            </div>
                        </div>
                        <script>
                            $('#select_subkategori').change(function() {
                                $v = $(this).val();
                                $('#xsubkategori').val($v);
                                if ($v == 'Buat Baru..') {
                                    $('#xsubkategori').val('');
                                    $('#xsubkategori').css('display', 'block');
                                } else {
                                    $('#xsubkategori').css('display', 'none');
                                }
                            })
                        </script>
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Photo</label>
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

    <!--Modal Edit Galeri-->
    <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Photo</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url() . 'admin/galeri/update_galeri' ?>" method="post" enctype="multipart/form-data" novalidate>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Judul</label>
                            <div class="col-sm-7">
                                <input type="text" name="xjudul_edit" class="form-control" value="" id="judul_edit" placeholder="Judul" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Kategori</label>
                            <div class="col-sm-7">
                                <input type="hidden" id="id_edit" name="id">
                                <input type="hidden" name="xkategori_edit" id="xkategori_edit" value="">
                                <select class="form-control" id="select_kategori_edit" style="width: 100%;" required>
                                    <option value='pintu'>Pintu ABS & UPVC</option>
                                    <option value='namo'>Namo</option>
                                    <option value='jendela'>Jendela UPVC</option>
                                    <option value='plafon'>Plafon UPVC</option>
                                    <option value='wpc'>WPC</option>
                                    <option value='shade'>Sun SHade</option>
                                    <option value='solid'>Solid Surface</option>
                                    <option value='kitchen'>Kitchen Set</option>
                                    <option value='aktifitas'>Kegiatan S-Plus</option>
                                </select>
                            </div>
                        </div>
                        <script>
                            $('#select_kategori_edit').change(function() {
                                $v = $(this).val()
                                $('#xkategori_edit').val($v);
                                if ($v == 'aktifitas') {
                                    $('#vkegiatan_edit').css('display', 'block');
                                } else {
                                    $('#vkegiatan_edit').css('display', 'none');
                                }
                            })
                        </script>
                        <div class="form-group" id="vkegiatan_edit" style="display:none">
                            <label for="inputUserName" class="col-sm-4 control-label">Aktifitas</label>
                            <div class="col-sm-7">
                                <?php $subcat = $this->db->group_by('galeri_subkategori')->get('tbl_galeri')->result(); ?>
                                <select class="form-control" id="select_subkategori_edit" <?= empty($subcat) ? 'style="display:none"' : 'style="display:block"' ?> required>
                                    <?php foreach ($subcat as $subcat) : if (!empty($subcat->galeri_subkategori)) : ?>
                                            <option><?= $subcat->galeri_subkategori ?></option>
                                    <?php endif;
                                    endforeach; ?>
                                    <option>Buat Baru..</option>
                                </select>
                                <input type="text" name="xsubkategori_edit" id="xsubkategori_edit" class="form-control" <?= empty($subcat) ? 'style="display:block"' : 'style="display:none; margin-top:10px;"' ?> placeholder="Tambah aktifitas baru">
                            </div>
                        </div>
                        <script>
                            $('#select_subkategori_edit').change(function() {
                                $v = $(this).val();
                                $('#xsubkategori_edit').val($v);
                                if ($v == 'Buat Baru..') {
                                    $('#xsubkategori_edit').val('');
                                    $('#xsubkategori_edit').css('display', 'block');
                                } else {
                                    $('#xsubkategori_edit').css('display', 'none');
                                }
                            })
                        </script>
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Photo</label>
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
    <!--Modal Edit kategori-->
    <script>
        $('.btn-edit').click(function() {
            $id = $(this).attr('data-id');
            $jd = $(this).attr('data-j');
            $kt = $(this).attr('data-k');
            $sk = $(this).attr('data-s');
            $('#judul_edit').val($jd);
            $('#xkategori_edit').val($kt);
            $('#xsubkategori_edit').val($sk);
            $('#select_kategori_edit option[value="' + $kt + '"]').attr('selected', 'selected');
            $('#id_edit').val($id);
            if ($sk !== '') {
                $('#vkegiatan_edit').css('display', 'block')
                $('#select_subkategori_edit option').each(function() {
                    if ($(this).text() == $sk) {
                        $(this).attr('selected', 'selected');
                    }
                })
            }

        })
    </script>

    <!--Modal Hapus Pengguna-->
    <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Hapus Photo</h4>
                </div>
                <form action="<?= base_url('admin/galeri/hapus_galeri') ?>" method="post">
                    <div class="modal-body">
                        <input type="hidden" id="hapus_galeri_id" name="id">
                        <p>Apakah Anda yakin mau menghapus Galeri <b></b> ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat btn-hapus-action" id="simpan">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $('.btn-hapus').click(function() {
            $id = $(this).attr('data-id');
            $('#hapus_galeri_id').val($id);
        });
    </script>

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

    <?php elseif ($this->session->flashdata('msg') == 'success') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "Photo Berhasil disimpan ke database.",
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
                text: "Photo berhasil di update",
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
                text: "Photo Berhasil dihapus.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
        </script>
    <?php endif; ?>

</body>

</html>