<!DOCTYPE html>
<html>
<head>
  <title>Data Produk</title>
  <style type="text/css">
    #outtable{
      padding: 20px;
      border:1px solid #e3e3e3;
      width:600px;
      border-radius: 5px;
    }
 
    .short{
      width: 10px;
    }
 
    .normal{
      width: 150px;
    }
 
    table{
      border-collapse: collapse;
      font-family: arial;
      color:#5E5B5C;
    }
 
    thead th{
      text-align: left;
      padding: 10px;
    }
 
    tbody td{
      border-top: 1px solid #e3e3e3;
      padding: 10px;
    }
 
    tbody tr:nth-child(even){
      background: #F6F5FA;
    }
 
    tbody tr:hover{
      background: #EAE9F5
    }
  </style>
</head>
<body>
	<div id="outtable">
	  <table>
	  	<thead>
	  		<tr>
	  			<th class="short">#</th>
          <th class="normal">Kategori</th>
	  			<th class="normal">Nama Produk</th>
	  			<th class="normal">Harga</th>
	  			<th class="short">Stok</th>
	  		</tr>
	  	</thead>
	  	<tbody>
	  		<?php $no=1; ?>
	  		<?php foreach($produk as $p): ?>
	  		  <tr>
	  			<td><?php echo $no; ?></td>
	  			<td><?php echo $p->kategori_nama; ?></td>
	  			<td><?php echo $p->produk_judul; ?></td>
	  			<td>Rp <?php echo number_format($p->produk_harga); ?></td>
          <td><?php echo $p->produk_stok; ?></td>
	  		  </tr>
	  		<?php $no++; ?>
	  		<?php endforeach; ?>
	  	</tbody>
	  </table>
	 </div>
</body>
</html>