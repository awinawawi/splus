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

                                <div class="box-body">
                                    <table id="example1" class="table table-striped" style="font-size:13px;">
                                        <thead>
                                            <tr>
                                                <th style="width: 5%">No</th>
                                                <th>No Invoice</th>
                                                <th>Total Belanja</th>
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
                                                $harga_produk = $i['harga_produk'];
                                                $jumlah_produk = $i['jumlah_produk'];
                                                $pengiriman = $i['pengiriman'];
                                                $tanggal_pengiriman = $i['tanggal_pengiriman'];

                                            ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $faktur; ?></td>
                                                    <td style='color:red;'>Rp <?php echo number_format($harga_produk / $jumlah_produk, 0, '.', '.') ?></td>
                                                    <td><?php echo $pengiriman; ?></td>
                                                    <td><?php echo date_format(date_create($tanggal_pengiriman), 'd M Y') ?></td>

                                                    <td style="text-align:right;">
                                                        <button>
                                                            <a class="btn" title='Download' href='" . base_url() . "page/download/$row[kode_transaksi]' target='_BLANK'>Download</a>
                                                        </button>
                                                        <button>
                                                            <a class='btn' title='Rincian data pesanan' href='Riwayat_transaksi/tracking_status/$order[faktur]' target='_BLANK'>Rincian</a>
                                                        </button>
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
        <?php $this->load->view('admin/v_footer') ?>
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
</body>

</html>