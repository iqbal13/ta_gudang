
<?php
include '../config/koneksi.php'; 
$kode_barang = $_GET['kode_barang'];
$nama_barang = $_GET['nama_barang'];

?>
<body onload="window.print()">
<p> 
  <strong> &nbsp;&nbsp;<?php echo $nama_barang ?> </strong>
  <br />
  <img src="<?php echo $url ?>barcode.php?text=<?php echo $kode_barang ?>"> 
</p>
</body>