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
                    Data Riwayat Transaksi
                    <small>S Plus Indonesia</small>
                </h1>

            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">

                            <div class="box">

                                <!-- /.box-header -->
                                <style>
                                    .dataTables_filter {
                                        float: right !important
                                    }
                                </style>
                                <?php if ($this->session->userdata('level') == 1) : ?>
                                    <div class="box-body">
                                        <table id="example1" class="table table-striped" style="font-size:13px;">
                                            <thead>
                                                <tr>
                                                    <th style="width: 5%">No</th>
                                                    <th>No Invoice</th>
                                                    <th>Status</th>
                                                    <th>Tanggal pengiriman</th>
                                                    <th>Pengguna_username</th>
                                                    <th style="text-align:center;">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                $no = 0;
                                                $subtotal = 0;

                                                foreach ($data_all->result_array() as $i) :
                                                    $no++;
                                                    $faktur = $i['faktur'];
                                                    $pengiriman = $i['pengiriman'];
                                                    $tanggal_pengiriman = $i['tanggal_pengiriman'];
                                                    $pengguna_username = $i['pengguna_username'];

                                                ?>
                                                    <tr>
                                                        <td><?php echo $no; ?></td>
                                                        <td><?php echo $faktur; ?></td>
                                                        <td><?php echo $pengiriman; ?></td>
                                                        <td><?php echo date_format(date_create($tanggal_pengiriman), 'd M Y') ?></td>
                                                        <td><?php echo $pengguna_username; ?></td>

                                                        <td style="text-align:right;">
                                                            <button>
                                                                <a class="btn" title='Download' href='" . base_url() . "page/download/$row[kode_transaksi]' target='_BLANK'>Download</a>
                                                            </button>
                                                            <button>
                                                                <a class='btn' title='Rincian data pesanan' href='<?= base_url('Homepage/tracking_rincian/') . $i['faktur'] ?>'>Rincian</a>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>

                                <?php else :  ?>
                                    <div class="box-body">
                                        <table id="example1" class="table table-striped" style="font-size:13px;">
                                            <thead>
                                                <tr>
                                                    <th style="width: 5%">No </th>
                                                    <th>No Invoice</th>
                                                    <th>Status</th>
                                                    <th>Tanggal pengiriman</th>

                                                    <th style="text-align:center;">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                $no = 0;
                                                $subtotal = 0;

                                                foreach ($data->result_array() as $i) :
                                                    $no++;
                                                    $faktur = $i['faktur'];
                                                    $pengiriman = $i['pengiriman'];
                                                    $tanggal_pengiriman = $i['tanggal_pengiriman'];


                                                ?>
                                                    <tr>
                                                        <td><?php echo $no; ?></td>
                                                        <td><?php echo $faktur; ?></td>
                                                        <td><?php echo $pengiriman; ?></td>
                                                        <td><?php echo date_format(date_create($tanggal_pengiriman), 'd M Y') ?></td>


                                                        <td style="text-align:right;">
                                                            <button>
                                                                <a class="btn" title='Download' href='<?= base_url('Homepage/download/') . $i['faktur'] ?>' target='_BLANK'>Download</a>
                                                            </button>
                                                            <!-- <button>
                                                                <a class='btn' title='Rincian data pesanan' href='Riwayat_transaksi/tracking_status/$order[faktur]' href='<?= base_url('Homepage/tracking_rincian/$i[kode_transaksi]') ?>' target='_BLANK'>Rincian</a>
                                                            </button> -->

                                                            <button>
                                                                <a class='btn' title='Rincian data pesanan' href='<?= base_url('Homepage/tracking_rincian/') . $i['faktur'] ?>'>Rincian</a>
                                                            </button>

                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                <?php endif; ?>

                            </div>

                        </div>

                    </div>

            </section>

        </div>
        <?php $this->load->view('admin/v_footer') ?>
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
</body>

</html>