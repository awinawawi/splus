<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

	<title>Splus Ecommerce | Masker</title>


	<!-- Additional CSS Files -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/ecommerce/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/ecommerce/css/font-awesome.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/ecommerce/css/templatemo-hexashop.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/ecommerce/css/owl-carousel.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/ecommerce/css/lightbox.css') ?>">
	<link rel="shortcut icon" href="<?= base_url('assets/user/images/logo.png') ?>">

	<!-- Price Range Script Start-->
	<link href="<?php echo base_url() ?>assets/css/filter/css/price-range.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/filter/css/responsive.css" rel="stylesheet">
	<link href="<?= base_url('assets/css/filter/css/jquery-ui.css') ?>" rel="stylesheet">
	<script src="<?= base_url('assets/css/filter/js/jquery-1.10.2.min.js') ?>"></script>
	<script src="<?= base_url('assets/css/filter/js/jquery-ui.js') ?>"></script>
	<script src="<?= base_url('assets/css/filter/js/bootstrap.min.js') ?>"></script>
	<!-- Price Range Code end -->

	<!-- Bootstrap Core CSS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="<?= base_url('assets/css/css-filter/bootstrap.min.css') ?>">
	<link href="<?php echo base_url(); ?>asset/css/css-filter/jquery-ui.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="<?= base_url('assets/css/css-filter/style.css') ?>" rel="stylesheet">


	<link rel="stylesheet" href="<?= base_url('assets/template/tema/') ?>css/style.css">





</head>

<body>

	<!-- ***** Preloader Start ***** -->
	<div id="preloader">
		<div class="jumper">
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>
	<!-- ***** Preloader End ***** -->


	<!-- ***** Header Area Start ***** -->
	<header class="header-area header-sticky">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="main-nav">
						<!-- ***** Logo Start ***** -->
						<div>
							<a href="<?= base_url('Ecommerce') ?>" class="logo">
								<img src="<?= base_url('assets/images/ourproduk/logo.jpg') ?>" style="width: 300px;">
							</a>
						</div>
						<!-- ***** Logo End ***** -->
						<!-- ***** Menu Start ***** -->
						<ul class="nav">
							<!-- <li class="submenu">
								<a href="javascript:;">Hubungi kami</a>
								<ul>
									<li><a href="<?= base_url('tentang-kami') ?>">About Us</a></li>
									<li><a href="<?= base_url('contact') ?>">Contact Us</a></li>
								</ul>
							</li> -->
							<!-- <li class="submenu">
								<a href="javascript:;">Product</a>
								<ul>
									<li><a href="<?= base_url('product_pintu_splus') ?>">Door</a></li>
									<li><a href="<?= base_url('product_window_splus') ?>">Window</a></li>
									<li><a href="<?= base_url('product_interior_material_splus') ?>">Interior Material</a></li>
									<li><a href="<?= base_url('product_exterior_material_splus') ?>">Exterior Material</a></li>
									<li><a href="<?= base_url('product_aksesoris_splus') ?>">Aksesoris</a></li>
									<li><a href="<?= base_url('product_masker_splus') ?>">Masker</a></li>
									<li><a href="<?= base_url('product_all') ?>">All Product</a></li>
								</ul>
							</li> -->
							<li><a href="<?= base_url('/cart') ?>">
									<span><svg width="30px" height="30px">
											<use xlink:href="<?= base_url('assets/css/') ?>sprite.svg#cart-20"></use>
										</svg>
										<?php
										$num_rows = $this->db->count_all_results('tbl_produk_keranjang');
										$isi_keranjang = $num_rows;
										?>

										<?php if (empty($isi_keranjang)) {
											echo '';
										} else { ?>
											<span> cart(<?= $isi_keranjang; ?>)</span>
										<?php } ?>
									</span>

								</a>
							</li>
							<!-- <li class="scroll-to-section"><a href="<?= base_url('administrator') ?>"> <span class="indicator__area">
										<svg width="20px" height="20px">
											<use xlink:href="<?= base_url('assets/') ?>images/sprite.svg#person-20"></use>
										</svg>
									</span>login</a>
							</li> -->
							<li>
								<style>
									.dropbtn {
										background-color: #fff;
										color: white;
										padding: 16px;
										font-size: 16px;
										border: none;
										cursor: pointer;
									}

									.dropbtn:hover,
									.dropbtn:focus {
										background-color: #2980B9;
									}

									.dropdown {
										position: relative;
										display: inline-block;
									}

									.dropdown-content {
										display: none;
										position: inherit;
										background-color: #f1f1f1;
										min-width: 160px;
										overflow: auto;
										box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
										z-index: 1;
									}

									.dropdown-content a {
										color: black;
										padding: 12px 16px;
										text-decoration: none;
										display: block;
									}

									.dropdown a:hover {
										background-color: #ddd;
									}

									.show {
										display: block;
									}
								</style>
								<div class="dropdown">

									<a onclick="myFunction()" class="dropbtn">
										<span>
											<svg width="20px" height="20px">
												<use xlink:href="<?= base_url('assets/') ?>images/sprite.svg#person-20"></use>
											</svg>
										</span>
									</a>

									<div id="myDropdown" class="dropdown-content">



										<?php
										if (!empty($this->session->userdata('idadmin'))) { ?>

											<form>
												<?php
												$id_admin = $this->session->userdata('idadmin');
												$q = $this->db->query("SELECT * FROM tbl_pengguna WHERE pengguna_id='$id_admin' ");
												$c = $q->row_array();
												?>
												<ul>
													<a href="<?= base_url('members/dashboard') ?>" class="account-menu__user">
														<div class="account-menu__user-avatar">
															<img src="<?php echo base_url() . 'assets/user/images/admin/' . $c['pengguna_photo']; ?>" class="img-circle" alt="">
														</div>
														<div class="account-menu__user-info">
															<div class="account-menu__user-name"> <b><?php echo $c['pengguna_nama']; ?></b></div>
															<div class="account-menu__user-email"><?php echo $c['pengguna_email']; ?></div>
														</div>

													</a>
												</ul>
												<br><br>
												<ul class="account-menu__links">
													<li><a href="<?= base_url('admin/Ubah_profil') ?>">Profil</a></li>
													<li><a href="<?= base_url('admin/Riwayat_transaksi') ?>">Riwayat Transaksi</a></li>
													<li><a href="<?= base_url('admin/Ubah_profil') ?>">Password</a></li>
												</ul>
												<ul class="account-menu__links">
													<li><a href="<?php echo base_url() . 'administrator/logout' ?>">Keluar</a></li>
												</ul>
											</form>

										<?php } else { ?>

											<form action="<?php echo base_url() . 'administrator/auth' ?>" method="post">
												<div class="account-menu__form-title">Masuk ke akun Anda</div>
												<div class="form-group has-feedback">
													<input type="text" name="username" class="form-control" placeholder="Username" required>
													<span class="glyphicon glyphicon-user form-control-feedback"></span>
												</div>
												<div class="form-group has-feedback">
													<input type="password" name="password" class="form-control" placeholder="Password" required>
													<span class="glyphicon glyphicon-lock form-control-feedback"></span>
												</div>
												<div class="form-group account-menu__form-button">
													<button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
												</div>
												<div class="account-menu__form-link">
													<a href="<?= base_url('register') ?>">Buat akun baru</a>
												</div>
											</form>



										<?php } ?>

									</div>

								</div>
								<script>
									function myFunction() {
										document.getElementById("myDropdown").classList.toggle("show");
									}


									window.onclick = function(event) {
										if (!event.target.matches('.dropbtn')) {
											var dropdowns = document.getElementsByClassName("dropdown-content");
											var i;
											for (i = 0; i < dropdowns.length; i++) {
												var openDropdown = dropdowns[i];
												if (openDropdown.classList.contains('show')) {
													openDropdown.classList.remove('show');
												}
											}
										}
									}
								</script>
							</li>
						</ul>
						<a class='menu-trigger'>
							<span>Menu</span>
						</a>
						<!-- ***** Menu End ***** -->
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- ***** Header Area End ***** -->

	<!-- ***** Main Banner Area Start ***** -->
	<div class="page-heading" id="top" style="background: url('<?= base_url('assets/images/ourproduk/produk/masker2.jpg') ?>'); background-size: cover;" class="pt-20">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="inner-content">
						<h2 style="color:black;">Our Products Makser</h2>
						<span style="color:black;">Featured Masker products</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ***** Main Banner Area End ***** -->


	<section class="section" id="products">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<br />
					<br />
					<br />

					<div class="list-group">
						<h4>JENIS</h4>
						<div style="height: 180px; overflow-y: auto; overflow-x: hidden;">

							<?php
							foreach ($jenis_data->result_array() as $row) {
							?>
								<div class="list-group-item checkbox">
									<label><input type="checkbox" class="common_selector brand" value="<?php echo $row['product_jenis']; ?>"> <?php echo $row['product_jenis']; ?></label>
								</div>
							<?php
							}
							?>
						</div>
					</div>
					<br></br>
					<div class="list-group">
						<h4>TIPE</h4>
						<div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
							<?php
							foreach ($tipe_data->result_array() as $row) {
							?>
								<div class="list-group-item checkbox">
									<label><input type="checkbox" class="common_selector ram" value="<?php echo $row['product_tipe']; ?>"> <?php echo $row['product_tipe']; ?></label>
								</div>
							<?php
							}
							?>
						</div>
					</div>
					<br></br>
					<div class="list-group">
						<h4>BRAND</h4>
						<?php
						foreach ($brand_data->result_array() as $row) {
						?>
							<div class="list-group-item checkbox">
								<label><input type="checkbox" class="common_selector storage" value="<?php echo $row['product_brand']; ?>"> <?php echo $row['product_brand']; ?></label>
							</div>
						<?php
						}
						?>
					</div>
					<br></br>
					<div class="list-group">
						<h4>PRINCE HARGA</h4>
						<input type="hidden" id="hidden_minimum_price" value="0" />
						<input type="hidden" id="hidden_maximum_price" value="65000" />

						<div id="price_range"></div> <br>
						<p align="center" id="price_show">Rp.10.000 - Rp.65.000</p>
					</div>
				</div>

				<div class="col-md-9">
					<h2 align="center">Product Masker</h2>
					<br />
					<div align="center">
					</div>
					<br />
					<br />
					<br />
					<div class="row filter_data">

					</div>
					<div align="center" id="pagination_link">
					</div>
				</div>

			</div>
			<style>
				#loading {
					text-align: center;
					background: url('<?php echo base_url(); ?>asset/loader.gif') no-repeat center;
					height: 150px;
				}
			</style>

			<script>
				$(document).ready(function() {

					filter_data(1);

					function filter_data(page) {
						$('.filter_data').html('<div id="loading" style="" ></div>');
						var action = 'fetch_data';
						var minimum_price = $('#hidden_minimum_price').val();
						var maximum_price = $('#hidden_maximum_price').val();
						var brand = get_filter('brand');
						var ram = get_filter('ram');
						var storage = get_filter('storage');
						$.ajax({
							url: "<?php echo base_url(); ?>product_filter_masker/fetch_data/" + page,
							method: "POST",
							dataType: "JSON",
							data: {
								action: action,
								minimum_price: minimum_price,
								maximum_price: maximum_price,
								brand: brand,
								ram: ram,
								storage: storage
							},
							success: function(data) {
								$('.filter_data').html(data.product_list);
								$('#pagination_link').html(data.pagination_link);
							}
						})
					}

					function get_filter(class_name) {
						var filter = [];
						$('.' + class_name + ':checked').each(function() {
							filter.push($(this).val());
						});
						return filter;
					}

					$(document).on('click', '.pagination li a', function(event) {
						event.preventDefault();
						var page = $(this).data('ci-pagination-page');
						filter_data(page);
					});

					$('.common_selector').click(function() {
						filter_data(1);
					});

					$('#price_range').slider({
						range: true,
						min: 10000,
						max: 650000,
						values: [10000, 650000],
						step: 500,
						stop: function(event, ui) {
							$('#price_show').html('Rp.' + ui.values[0] + ' - Rp.' + ui.values[1]);
							$('#hidden_minimum_price').val(ui.values[0]);
							$('#hidden_maximum_price').val(ui.values[1]);
							filter_data(1);
						}

					});

				});
			</script>
		</div>
	</section>



	<!-- ***** Footer Start ***** -->
	<footer>
		<div class="container">
			<div class="row" style="font-size:20px ;">
				<div class="col-lg-3">
					<div class="first-item">
						<!-- <a style="color: #fff;">Head Office & Factory</a>
                        <br></br>
                        <ul>
                            <li><a href="#">Jl. Raya Kanci Cirebon – Tegal KM 13,5 Desa Rawaurip<br>
                                    Kec. Pangenan Kab. Cirebon 45182</a></li>
                            <li><a href="#">Telp. (0231) 8511781 – 85</a></li>
                            <li><a href="#">Fax.(0231) 85117825</a></li>
                        </ul> -->
						<a style="color: #fff;">Bantuan</a>
						<br></br>

						<ul>
							<li><a href="<?= base_url('paymen') ?>">Cara Belanja</a></li>
							<li><a href="<?= base_url('shopbybrand') ?>">Tanya Jawab/FAQ</a></li>
							<li><a href="<?php echo base_url('pemasangan/splus'); ?>">Pemasangan Produk</a></li>
							<li><a href="<?php echo base_url('hubungi-kami'); ?>">Hubungi kami</a></li>

						</ul>
					</div>
				</div>
				<div class="col-lg-3">
					<a style="color: #fff;">Help &amp; Information</a>
					<br></br>

					<ul>
						<li><a href="<?php echo base_url('tentang-kami'); ?>">Tentang Kami</a></li>
						<li><a href="<?= base_url('promosi') ?>">Berita & Acara</a></li>
						<li><a href="<?= base_url('e-katalog') ?>">Katalog Produk</a></li>
						<li><a href="<?= base_url('bebas_ogkir') ?>">Tracking Pesanan</a></li>
						<li><a href="<?php echo base_url('karir'); ?>">Jenjang Karir</a></li>
					</ul>
				</div>
				<div class="col-lg-3">
					<a style="color: #fff;">Kebijakan Privasi</a>
					<br></br>
					<ul>
						<li><a href='<?= base_url('syarat_k') ?>'>Syarat & Ketentuan</a></li>
						<li><a href='<?= base_url('kebijakan_p') ?>'>Kebijakan Privasi</a></li>


					</ul>
				</div>
				<div class="col-lg-3">
					<a style="color: #fff;">Our product &amp; Categories</a>
					<br></br>
					<ul>
						<li><a href="<?= base_url('product_pintu_splus') ?>">Pintu</a></li>
						<li><a href="<?= base_url('product_window_splus') ?>">Jendela</a></li>
						<li><a href="<?= base_url('product_interior_material_splus') ?>">Interior Material</a></li>
						<li><a href="<?= base_url('product_exterior_material_splus') ?>">Exterior Material</a></li>
						<li><a href="<?= base_url('product_aksesoris_splus') ?>">Aksesoris</a></li>
						<li><a href="<?= base_url('product_masker_splus') ?>">Masker</a></li>
					</ul>
				</div>
				<div class="col-lg-12">
					<div class="under-footer">
						<p>Copyright © 2022 PT Smart Techtex Group.All Rights Reserved.
							<br>Follow Us on Social Media: <a href="https://localhost/splus" target="_blank" title="free & premium responsive templates">Splus Indonesia</a>
						</p>
						<ul>
							<li><a href="https://www.facebook.com/S-Plus-Indonesia-100698461599924/"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://www.instagram.com/splusindonesia/"><i class="fa fa-instagram"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCMYj8Md6whMbPNFcyxjyA6A"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!-- jQuery -->

	<script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/jquery-2.1.0.min.js') ?>"></script>

	<!-- Bootstrap -->
	<script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/popper.js') ?>"></script>
	<script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/bootstrap.min.js') ?>"></script>

	<!-- Plugins -->
	<script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/owl-carousel.js') ?>"></script>
	<script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/accordions.js') ?>"></script>
	<script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/datepicker.js') ?>"></script>
	<script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/scrollreveal.min.js') ?>"></script>
	<script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/waypoints.min.js') ?>"></script>
	<script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/jquery.counterup.min.js') ?>"></script>
	<script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/imgfix.min.js') ?>"></script>
	<script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/slick.js') ?>"></script>
	<script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/lightbox.js') ?>"></script>
	<script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/isotope.js') ?>"></script>


	<!-- Global Init -->
	<script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/custom.js') ?>"></script>

	<script>
		$(function() {
			var selectedClass = "";
			$("p").click(function() {
				selectedClass = $(this).attr("data-rel");
				$("#portfolio").fadeTo(50, 0.1);
				$("#portfolio div").not("." + selectedClass).fadeOut();
				setTimeout(function() {
					$("." + selectedClass).fadeIn();
					$("#portfolio").fadeTo(50, 1);
				}, 500);

			});
		});
	</script>

</body>

</html>