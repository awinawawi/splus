<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('admin/v_head') ?>
    <?php echo var_dump($username); ?>
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
            <section class="content">
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
                            </div> <!-- /.info-box-content -->
                        </div> <!-- /.info-box -->
                    </div> <!-- /.col -->

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-red"><i class="fa fa-firefox"></i></span>
                            <?php
                            $jml = $this->db->query('SELECT * FROM tbl_pengunjung WHERE pengunjung_perangkat = "Firefox" OR pengunjung_perangkat = "Mozilla"')->num_rows();
                            ?>
                            <div class="info-box-content">
                                <span class="info-box-text">Mozilla Firefox</span>
                                <span class="info-box-number"><?php echo $jml; ?></span>
                            </div> <!-- /.info-box-content -->
                        </div> <!-- /.info-box -->
                    </div> <!-- /.col -->

                    <!-- fix for small devices only -->
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
                            </div> <!-- /.info-box-content -->
                        </div> <!-- /.info-box -->
                    </div> <!-- /.col -->

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
                        </div> <!-- /.info-box -->
                    </div> <!-- /.col -->

                </div> <!-- /.row -->

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

                </div> <!-- /.row -->

            </section> <!-- /.content -->
        </div> <!-- /.content-wrapper -->

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