<style>
.table { width:100%; border: 1px solid #333; border-collapse:collapse; }
.table > tr,th { border: 1px solid #333; background-color:#eee}
.table > tr,td {padding:5px 10px; border: 1px solid #333;}
.borderless>tbody>tr>td{border:none}
.center {text-align: center}
</style>

<table class="borderless">
<tbody>
<tr>
   <td width="15%">Nama Pembeli</td><td width="1%">:</td><td><?=$order[0]->nama?></td>
   <td style="text-align:right">Kode Pesanan : <strong><?=$order[0]->faktur?></strong></td>
</tr>
<tr>
   <td width="10%">E-mail</td><td width="1%">:</td><td><?=$order[0]->email?></td>
   <td style="text-align:right">Tanggal <strong><?=date('d M Y')?></strong></td>
</tr>
<tr>
   <td width="10%">No Telp/hp</td><td width="1%">:</td><td><?=$order[0]->telepon?> / <?=$order[0]->handphone?></td>
</tr>
<tr>
   <td width="10%">Alamat Pengiriman</td><td width="1%">:</td><td><?=$order[0]->alamat?> <?=$order[0]->kecamatan?> <?=$order[0]->kota?> <?=$order[0]->provinsi?>, <?=$order[0]->kodepos?></td>
</tr>
<tr>
   <td width="10%">Tanggal Pengiriman</td><td width="1%">:</td><td><?=date_format(date_create($order[0]->tanggal_pengiriman), 'd M Y')?></td>
</tr>
<tr>
   <td width="10%">Kurir Pengiriman</td><td width="1%">:</td><td><?=$order[0]->kurir_pengiriman?> - <?=$order[0]->layanan_pengiriman?> (Rp <?=number_format($order[0]->ongkos_pengiriman,0,'.','.')?> )</td>
</tr>
</tbody>
</table>

<br>

<table class="table">
<thead>
   <tr>
     <th>Nama Barang</th>
     <th>Ukuran</th>
     <th>Kuantitas</th>
     <th>Harga m<sup>2</sup></th>
     <th>Subtotal</th>
     <th>Diskon</th>
     <th>Total</th>
   </tr>
</thead>
<tbody class="border">
<?php 
$subtotal = 0;
foreach($order as $o): 
$subtotal += $o->harga_produk; 
?>
   <tr>
     <td><?=$o->nama_produk?> <?=$o->tipe_produk?> <br> warna (<?=$o->warna_produk?>)</td>
     <td class="center"><?=$o->lebar_produk?>mm x <?=$o->tinggi_produk?>mm</td>
     <td class="center"><?=$o->jumlah_produk?></td>
     <td class="center">Rp <?=number_format($o->harga_produk_meter,0,'.','.')?></td>
     <td class="center">Rp <?=number_format($o->harga_produk / $o->jumlah_produk,0,'.','.')?></td>
     <td class="center">-</td>
     <td class="center">Rp <?=number_format($o->harga_produk,0,'.','.')?></td>
   </tr>
<?php endforeach; ?>
   <tr>
      <td colspan="6"><b>Subtotal</b></td>
      <td>Rp <?=number_format($subtotal,0,'.','.')?></td>
   </tr>
   <tr>
      <td colspan="6"><b>Ongkos Kirim</b></td>
      <td>Rp <?=number_format($order[0]->ongkos_pengiriman,0,'.','.')?> </td>
   </tr>
   <tr>
      <td colspan="6"><b>Total</b></td>
      <td>Rp <?=number_format($subtotal + $order[0]->ongkos_pengiriman,0,'.','.')?></td>
   </tr>
</tbody>
</table>
<br>
<table class="borderless">
<tbody>
<tr>
   <td width="15%">Catatan Pembeli</td><td width="1%">:</td><td colspan="6"><?=$order[0]->catatan_pembelian?></td>
</tr>
<tr>
   <td width="15%">Note</td><td width="1%">:</td><td>-</td>
</tr>
<tr>
   <td width="10%">Pembayaran</td><td width="1%">:</td><td><?=$order[0]->metode_pembayaran?></td>
</tr>
<tr>
   <td width="10%"></td><td width="1%">:</td>
   <td>
      Daftar Rekening PT Smart Techtex <br>
   </td>
</tr>
<tr>
   <td width="10%"></td><td width="1%"></td>
   <td width="20%"><b>MANDIRI</b> <br> PT Smart Techtex <br> 134-000-734-3691</td>
   <td width="20%"><b>BNI</b> <br> PT Smart Techtex <br> 268-302-961</td>
   <td><b>BCA</b> <br> PT Smart Techtex <br> 3041-777-000</td>
</tr>
<tr>
   <td width="10%"></td><td width="1%"></td><td colspan=3><small><i>*kami tidak menerima pembayaran selain rekening diatas</i></small> <br> <small><i>*kami tidak bertanggung jawab atas kesalahan pembayaran</i></small></td>
</tr>
</tbody>
</table>

