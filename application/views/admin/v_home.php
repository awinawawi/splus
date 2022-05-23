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

        <aside class="main-sidebar">
            <?php $this->load->view('admin/v_sidebar') ?>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>S Plus Indonesia</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>

            <!-- Main content -->
            <!-- <section class="content">
                <div class="row">

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-aqua"><i class="fa fa-chrome"></i></span>
                            <?php
                            $jml = $this->db->get_where('tbl_pengunjung', array('pengunjung_perangkat' => 'Chrome'))->num_rows();
                            ?>
                            <div class="info-box-content">
                                <span class="info-box-text">Chrome</span>
                                <span class="info-box-number"><?php echo $jml; ?></span>
                            </div> 
                        </div> 
                    </div> 

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-red"><i class="fa fa-firefox"></i></span>
                            <?php
                            $jml = $this->db->query('SELECT * FROM tbl_pengunjung WHERE pengunjung_perangkat = "Firefox" OR pengunjung_perangkat = "Mozilla"')->num_rows();
                            ?>
                            <div class="info-box-content">
                                <span class="info-box-text">Mozilla Firefox</span>
                                <span class="info-box-number"><?php echo $jml; ?></span>
                            </div> 
                        </div> 
                    </div> 

                   
                    <div class="clearfix visible-sm-block"></div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-green"><i class="fa fa-bug"></i></span>
                            <?php
                            $jml = $this->db->get_where('tbl_pengunjung', array('pengunjung_perangkat' => 'Googlebot'))->num_rows();
                            ?>
                            <div class="info-box-content">
                                <span class="info-box-text">Googlebot</span>
                                <span class="info-box-number"><?php echo $jml; ?></span>
                            </div> 
                        </div> 
                    </div> 

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-yellow"><i class="fa fa-opera"></i></span>
                            <?php
                            $jml = $this->db->get_where('tbl_pengunjung', array('pengunjung_perangkat' => 'Opera'))->num_rows();
                            ?>
                            <div class="info-box-content">
                                <span class="info-box-text">Opera</span>
                                <span class="info-box-number"><?php echo $jml; ?></span>
                            </div>
                        </div> 
                    </div> 

                </div> 

                <div class="row">

                    <?php
                    $produk = $this->db->query('SELECT * FROM tbl_produk_varian');
                    $pengguna = $this->db->query("SELECT * FROM tbl_pengguna WHERE pengguna_level='2'");
                    $pembelian = $this->db->query('SELECT * FROM tbl_pembelian ');
                    $pelanggan = $this->db->query('SELECT * FROM tbl_pelanggan');
                    ?>


                    <div class="col-lg-3 col-6">

                        <div class="small-box bg-info" style="background-color:#5ac8ff">
                            <div class="inner" style="color:#000">
                                <h3><?= $produk->num_rows(); ?></h3>
                                <p>Produk</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">

                        <div class="small-box bg-success" style="background-color:#28a745">
                            <div class="inner" style="color:#000">
                                <h3><?= $pembelian->num_rows(); ?></h3>
                                <p>Penjualan</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                      
                        <div class="small-box bg-warning" style="background-color:#ffc107">
                            <div class="inner" style="color:#000">
                                <h3><?= $pengguna->num_rows(); ?></h3>
                                <p>Konsumen/Pengguna</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                      
                        <div class="small-box bg-danger" style="background-color:#dc3545">
                            <div class="inner" style="color:#000">
                                <h3><?= $pelanggan->num_rows(); ?></h3>
                                <p>Pelanggan</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Pengunjung bulan ini</h3>
                            </div>
                           
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <canvas id="canvas" width="1000" height="280"></canvas>
                                        </div> 
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                    </div> 

                </div>
            </section> -->

            <?php if ($this->session->userdata('level') == 1) : ?>
                <section class="content">
                    <div class="row">

                        <?php
                        $produk = $this->db->query('SELECT * FROM tbl_produk_varian');
                        $pengguna = $this->db->query("SELECT * FROM tbl_pengguna WHERE pengguna_level='2'");
                        $pembelian = $this->db->query('SELECT * FROM tbl_pembelian ');
                        $pelanggan = $this->db->query('SELECT * FROM tbl_pelanggan');
                        ?>


                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-info" style="background-color:#5ac8ff">
                                <div class="inner" style="color:#000">
                                    <h3><?= $produk->num_rows(); ?></h3>
                                    <p>Produk</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-success" style="background-color:#28a745">
                                <div class="inner" style="color:#000">
                                    <h3><?= $pembelian->num_rows(); ?></h3>
                                    <p>Penjualan</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning" style="background-color:#ffc107">
                                <div class="inner" style="color:#000">
                                    <h3><?= $pengguna->num_rows(); ?></h3>
                                    <p>Konsumen/Pengguna</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger" style="background-color:#dc3545">
                                <div class="inner" style="color:#000">
                                    <h3><?= $pelanggan->num_rows(); ?></h3>
                                    <p>Pelanggan</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Pengunjung bulan ini</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-12">
                                                <canvas id="canvas" width="1000" height="280"></canvas>
                                            </div> <!-- /.col -->
                                        </div> <!-- /.col -->
                                    </div> <!-- /.row -->
                                </div> <!-- ./box-body -->
                            </div> <!-- /.box -->
                        </div> <!-- /.col -->

                    </div>
                </section>
            <?php else :  ?>
                <section class="content">
                    <div class="row">

                        <?php
                        $produk = $this->db->query('SELECT * FROM tbl_produk_varian');
                        $pengguna = $this->db->query("SELECT * FROM tbl_pengguna WHERE pengguna_level='2'");
                        $pembelian = $this->db->query('SELECT * FROM tbl_pembelian ');
                        $pelanggan = $this->db->query('SELECT * FROM tbl_pelanggan');
                        ?>


                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-info" style="background-color:#5ac8ff">
                                <div class="inner" style="color:#000">
                                    <h3><?= $produk->num_rows(); ?></h3>
                                    <p>Produk</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-success" style="background-color:#28a745">
                                <div class="inner" style="color:#000">
                                    <h3><?= $pembelian->num_rows(); ?></h3>
                                    <p>Penjualan</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning" style="background-color:#ffc107">
                                <div class="inner" style="color:#000">
                                    <h3><?= $pengguna->num_rows(); ?></h3>
                                    <p>Konsumen/Pengguna</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger" style="background-color:#dc3545">
                                <div class="inner" style="color:#000">
                                    <h3><?= $pelanggan->num_rows(); ?></h3>
                                    <p>Pelanggan</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <?php
                        $id_admin = $this->session->userdata('idadmin');
                        $q = $this->db->query("SELECT * FROM tbl_pengguna   WHERE pengguna_id='$id_admin' ");
                        $c = $q->row_array();
                        ?>
                        <div class="box-header with-border">
                            <div class="account-menu__user-avatar">
                                <img src="<?php echo base_url() . 'assets/user/images/admin/' . $c['pengguna_photo']; ?>" class="img-circle" style="width:50px;height:50px;" alt="">
                            </div>
                            <div class="account-menu__user-info">
                                <div class="account-menu__user-name"> <b><?php echo $c['pengguna_nama']; ?></b></div>
                                <div class="account-menu__user-email"><?php echo $c['pengguna_email']; ?></div>
                            </div>
                        </div>

                        <div class="box-header with-border">
                            <h3 class="box-title"><b>Nomor Telepone</b></h3>
                            <div class="profile-card__email"><?php echo $c['pengguna_nohp']; ?></div>
                        </div>
                        <div class="box-header with-border">
                            <h3 class="box-title"><b>Email</b></h3>
                            <div class="profile-card__email"><?php echo $c['pengguna_email']; ?></div>
                        </div>
                        <div class="box-header with-border">
                            <h3 class="box-title"><b>User Name </b></h3>
                            <div class="profile-card__email"><?php echo $c['pengguna_username']; ?></div>
                        </div>

                        <div class="box-header with-border"><a href="<?= base_url('admin/Ubah_profil') ?>">Edit profile</a></div>
                    </div>
                </section>
            <?php endif; ?>


        </div>

        <?php $this->load->view('admin/v_footer') ?>

    </div>

    <script>
        var lineChartData = {
            labels: [<?php foreach ($visitor as $v) {
                            echo $v->tanggal . ',';
                        } ?>],
            datasets: [

                {
                    fillColor: "rgba(60,141,188,0.9)",
                    strokeColor: "rgba(60,141,188,0.8)",
                    pointColor: "#3b8bba",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(152,235,239,1)",
                    data: [<?php foreach ($visitor as $v) {
                                echo $v->visitor . ',';
                            } ?>]
                }

            ]

        }

        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);

        var canvas = new Chart(myLine).Line(lineChartData, {
            scaleShowGridLines: true,
            scaleGridLineColor: "rgba(0,0,0,.005)",
            scaleGridLineWidth: 0,
            scaleShowHorizontalLines: true,
            scaleShowVerticalLines: true,
            bezierCurve: true,
            bezierCurveTension: 0.4,
            pointDot: true,
            pointDotRadius: 4,
            pointDotStrokeWidth: 1,
            pointHitDetectionRadius: 2,
            datasetStroke: true,
            tooltipCornerRadius: 2,
            datasetStrokeWidth: 2,
            datasetFill: true,
            legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
            responsive: true
        });
    </script>
</body>

</html>