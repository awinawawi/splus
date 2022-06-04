<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Splus Ecommerce</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/ecommerce/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/ecommerce/css/font-awesome.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/ecommerce/css/templatemo-hexashop.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/ecommerce/css/owl-carousel.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/ecommerce/css/lightbox.css') ?>">
    <link rel="shortcut icon" href="<?= base_url('assets/user/images/logo.png') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/depan-ecommerce/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/depan-ecommerce/maicons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/depan-ecommerce/theme.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/depan-ecommerce/vendor/animate/animate.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/depan-ecommerce/vendor/owl-carousel/css/owl.carousel.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/depan-ecommerce/vendor/fancybox/css/jquery.fancybox.css') ?>">

    <!-- <link rel="stylesheet" href="<?= base_url('assets/template/tema/css/style.css') ?>"> -->

    <link rel="stylesheet" href="<?= base_url('assets/template/tema/') ?>css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>

<body>

    <?php
    if ($data['status'] == '0') {
        $proses = 'Pending';
    } elseif ($data['status'] == '1') {
        $proses = 'Proses';
    } elseif ($data['status'] == '2') {
        $proses = 'Dikirim';
    }
    ?>

    <div class="wrapper w-100 mx-auto">
        <div class="font-weight-bold mt-2 mb-4">
            <h5 class="">Rincian Pesanan - <?= $data['faktur'] ?></h5>
        </div>
        <!-- Row -->
        <div class="row">
            <div class='col-lg-8 col-md-6'>
                <table class="table table-borderless table-sm">
                    <tr>
                        <td width="140px;">
                            <b>
                                <large>Nama</large>
                            </b>
                        </td>
                        <td>: <?= $data['nama_produk']; ?></td>

                    </tr>
                    <tr>
                        <td>
                            <b>
                                <large>No. Telpon</large>
                            </b>
                        </td>
                        <td>: <?= $data['handphone']; ?></td>

                    </tr>

                    <tr>
                        <td>
                            <b>
                                <large>Alamat</large>
                            </b>
                        </td>
                        <td>: <?= $data['alamat']; ?></td>

                    </tr>
                </table>
            </div>

            <div class='col-lg-4 col-md-6'>
                <table class="table table-borderless table-sm">
                    <tr>
                        <td width="140px;">
                            <b>
                                <large>Total Bayar</large>
                            </b>

                        </td>
                        <td>: <?= $data['total']; ?></td>
                    </tr>
                    <tr>
                        <td>
                            <b>
                                <large>Pengiriman</large>
                            </b>
                        </td>

                        <span style='text-transform:uppercase'>
                            <td>: <?= $data['kurir_pengiriman']; ?> /
                                <?= $data['layanan_pengiriman']; ?></td>
                        </span>

                    </tr>

                    <tr>
                        <td>
                            <b>
                                <large>Status</large>
                            </b>
                        </td>
                        <td>: <?= $proses ?></td>
                    </tr>



                </table>
            </div>


        </div>

        <table class="table " id='tablemodul1'>
            <thead class="table-dark">
                <tr class="border border-dark">
                    <th>No</th>
                    <th width='47%'>Nama Produk</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 0;
                $data = $this->db->query('SELECT *,SUM(a.harga_produk) AS total FROM tbl_pembelian a JOIN tbl_pelanggan b ON a.session_id=b.session_id');
                foreach ($data->result_array()  as $i) :
                    $no++;
                    $nama_produk = $i['nama_produk'];
                    $harga_produk = $i['harga_produk'];
                    $jumlah_produk = $i['jumlah_produk'];
                    $total = $i['total'];
                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $nama_produk; ?></td>
                        <td><?php echo $harga_produk; ?></td>
                        <td><?php echo $jumlah_produk; ?></td>
                        <td><?php echo $total; ?></td>

                    </tr>
                <?php endforeach; ?>

                <tr>
                    <td colspan='4'><b>Subtotal </b></td>

                </tr>

                <tr>
                    <td colspan='4'><b>Ongkir </b></td>

                </tr>

                <tr>
                    <td colspan='4'><b>Total Bayar</b></td>

                    <td>
                </tr>
            </tbody>
        </table>

        <br>

        <p class="text-center"> Silahkan transfer ke salah satu pilihan rekening bank dibawah ini:</p>
        <table class="table table-borderless table-sm w-75 mx-auto" id='tablemodul1'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Bank</th>
                    <th>No Rekening</th>
                    <th>Atas Nama</th>
                </tr>
            </thead>

        </table>
        <hr>
    </div>

</body>