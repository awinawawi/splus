<?php

//fetch_data.php

include('database_connection.php');

if (isset($_POST["action"])) {
	$query = "
	SELECT * FROM tbl_produk_varian WHERE produk_id = '2' 
	";
	if (isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"])) {
		$query .= "
		 AND varian_harga_meter BETWEEN '" . $_POST["minimum_price"] . "' AND '" . $_POST["maximum_price"] . "'
		";
	}



	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if ($total_row > 0) {
		foreach ($result as $row) {
			$output .= '
			<div class="col-sm-4 col-lg-3 col-md-3">
				<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
					<img src="assets/images/ourproduk/produk/' . $row['varian_gambar_depan'] . '" alt="" class="img-responsive" >
					<p align="center"><strong><a href="#">' . $row['varian_type'] . '</a></strong></p>
					<h4 style="text-align:center;" class="text-danger" >' . $row['varian_harga_meter'] . '</h4>
					<p>tipe : ' . $row['varian_type'] . ' MP<br />
					 </p>
				</div>

			</div>
			';
		}
	} else {
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}
