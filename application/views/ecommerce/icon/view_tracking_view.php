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
    if ($record2['status'] == '0') {
        $proses = 'Pending';
    } elseif ($record2['status'] == '1') {
        $proses = 'Proses';
    } elseif ($record2['status'] == '2') {
        $proses = 'Dikirim';
    }
    ?>

    <div class="wrapper w-100 mx-auto" style="padding-left:40px ;">
        <div class="font-weight-bold mt-2 mb-4">
            <h5 class="">Rincian Pesanan - <?= $record2['faktur'] ?></h5>
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
                        <td>: <?= $record2['nama_produk']; ?></td>

                    </tr>
                    <tr>
                        <td>
                            <b>
                                <large>No. Telpon</large>
                            </b>
                        </td>
                        <td>: <?= $record2['handphone']; ?></td>

                    </tr>

                    <tr>
                        <td>
                            <b>
                                <large>Alamat</large>
                            </b>
                        </td>
                        <td>: <?= $record2['alamat']; ?></td>

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
                        <td>: Rp <?php echo number_format(($data['total']) + ($data['ongkir']), 0, '.', '.') ?></td>
                    </tr>
                    <tr>
                        <td>
                            <b>
                                <large>Pengiriman</large>
                            </b>
                        </td>

                        <span style='text-transform:uppercase'>
                            <td>: <?= $record2['kurir_pengiriman']; ?> /
                                <?= $record2['layanan_pengiriman']; ?></td>
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
                    <th width='30%'>Nama Produk</th>
                    <th>Type</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 0;

                foreach ($record->result_array()  as $i) :
                    $no++;
                    $nama_produk = $i['nama_produk'];
                    $tipe_produk = $i['tipe_produk'];
                    $harga_produk = $i['harga_produk_meter'];
                    $jumlah_produk = $i['jumlah_produk'];

                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $nama_produk; ?></td>
                        <td><?php echo $tipe_produk; ?></td>
                        <td>Rp <?php echo number_format($harga_produk, 0, '.', '.') ?></td>
                        <td><?php echo $jumlah_produk; ?></td>
                        <!-- <td><?php echo $total; ?></td> -->
                        <td>Rp <?php echo number_format($harga_produk * $jumlah_produk, 0, '.', '.') ?></td>

                    </tr>
                <?php endforeach; ?>

                <tr>
                    <td colspan='5'><b>Subtotal </b></td>
                    <td><b>Rp <?php echo number_format(($data['total']), 0, '.', '.') ?>
                        </b>
                    </td>

                </tr>

                <tr>
                    <td colspan='5'><b>Ongkir </b></td>
                    <td><b>Rp <?php echo number_format(($data['ongkir']), 0, '.', '.') ?>
                        </b>
                    </td>

                </tr>

                <tr>
                    <td colspan='5'><b>Total Bayar</b></td>
                    <td><b>Rp <?php echo number_format(($data['total']) + ($data['ongkir']), 0, '.', '.') ?></b></td>


                </tr>
            </tbody>
        </table>

        <br>

        <p class="text-center"> Silahkan transfer ke rekening bank yang sudah di pilih dibawah ini:</p>
        <table class="table" id='tablemodul1'>
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Bank</th>
                    <th>No Rekening</th>
                    <th>Atas Nama</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;



                foreach ($data_bank->result_array()  as $i) :
                    $no++;
                    $nama_bank = $i['nama_bank'];
                    $no_rekening = $i['no_rekening'];
                    $pemilik_rekening = $i['pemilik_rekening'];

                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $nama_bank; ?></td>
                        <td><?php echo $no_rekening; ?></td>
                        <td><?php echo $pemilik_rekening; ?></td>


                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
        <hr>
    </div>

</body>