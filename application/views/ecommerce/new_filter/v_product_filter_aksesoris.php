<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

	<title>Splus Ecommerce | Window</title>


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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="<?php echo base_url(); ?>asset/css/css-filter/jquery-ui.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="<?= base_url('assets/css/css-filter/style.css') ?>" rel="stylesheet">





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
							<li class="submenu">
								<a href="javascript:;">Hubungi kami</a>
								<ul>
									<li><a href="<?= base_url('tentang-kami') ?>">About Us</a></li>
									<li><a href="<?= base_url('contact') ?>">Contact Us</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:;">Products</a>
								<ul>
									<li><a href="<?= base_url('product_pintu_splus') ?>">Door</a></li>
									<li><a href="<?= base_url('product_window_splus') ?>">Window</a></li>
									<li><a href="<?= base_url('product_interior_material_splus') ?>">Interior Material</a></li>
									<li><a href="<?= base_url('product_exterior_material_splus') ?>">Exterior Material</a></li>
									<li><a href="<?= base_url('product_aksesoris_splus') ?>">Aksesoris</a></li>
									<li><a href="<?= base_url('product_masker_splus') ?>">Masker</a></li>
									<li><a href="<?= base_url('product_all') ?>">All Product</a></li>
								</ul>
							</li>


							<li class="scroll-to-section"><a href="#explore">login</a></li>
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
	<div class="page-heading" id="top" style="background: url('<?= base_url('assets/images/ourproduk/produk/engsel.jpg') ?>'); background-size: cover;" class="pt-20">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="inner-content">
						<h2 style="color:black;">Our Products Aksesoris</h2>
						<span style="color:black;">Featured Aksesoris products</span>
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
						<h3>Jenis</h3>
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

					<div class="list-group">
						<h3>Tipe</h3>
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

					<div class="list-group">
						<h3>Brand</h3>
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

					<div class="list-group">
						<h3>Price</h3>
						<input type="hidden" id="hidden_minimum_price" value="0" />
						<input type="hidden" id="hidden_maximum_price" value="65000" />

						<div id="price_range"></div> <br>
						<p align="center" id="price_show">Rp.10.000 - Rp.65.000</p>
					</div>
				</div>

				<div class="col-md-9">
					<h2 align="center">Product Aksesoris</h2>
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
							url: "<?php echo base_url(); ?>product_filter_aksesoris/fetch_data/" + page,
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
			<div class="row">
				<div class="col-lg-3">
					<div class="first-item">
						<a style="color: #fff;">Head Office & Factory</a>
						<br></br>
						<ul>
							<li><a href="#">Jl. Raya Kanci Cirebon – Tegal KM 13,5 Desa Rawaurip<br>
									Kec. Pangenan Kab. Cirebon 45182</a></li>
							<li><a href="#">Telp. (0231) 8511781 – 85</a></li>
							<li><a href="#">Fax.(0231) 85117825</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3">
					<a style="color: #fff;">Our product &amp; Categories</a>
					<br></br>
					<ul>
						<li><a href="#">Pintu</a></li>
						<li><a href="#">Jendela</a></li>
						<li><a href="#">Interior Material</a></li>
						<li><a href="#">Exterior Material</a></li>
						<li><a href="#">Aksesoris</a></li>
						<li><a href="#">Masker</a></li>
					</ul>
				</div>
				<div class="col-lg-3">
					<a style="color: #fff;">Customer service</a>
					<br></br>

					<ul>
						<li><a href="#">Hubungi Kami</a></li>
						<li><a href="#">Pemasangan</a></li>
						<li><a href="#">Tentang Kami</a></li>
						<li><a href="#">Karir</a></li>
					</ul>
				</div>
				<div class="col-lg-3">
					<a style="color: #fff;">Help &amp; Information</a>
					<br></br>

					<ul>
						<li><a href="#">Help</a></li>
						<li><a href="#">FAQ's</a></li>
						<li><a href="#">Shipping</a></li>
						<li><a href="#">Tracking ID</a></li>
					</ul>
				</div>
				<div class="col-lg-12">
					<div class="under-footer">
						<p>Copyright © 2022 PT Smart Techtex Group.All Rights Reserved.
							<br>Follow Us on Social Media: <a href="https://localhost/splus" target="_blank" title="free & premium responsive templates">Splus Indonesia</a>
						</p>
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
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