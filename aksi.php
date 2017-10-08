<?php 

	include 'config/koneksi.php';


	$aksi = $_GET['aksi'];

	if($aksi == "tambahbarang"){
		$kode_barang = $_POST['kode_barang'];
		$jumlah = $_POST['jumlah'];
		$sekarang = date('Y-m-d H:i:s');
		$created_by = $_SESSION['username'];

		$cek_barang = mysqli_query($conn,"SELECT * FROM barang WHERE kode_barang = '$kode_barang'");
		$dt = mysqli_fetch_array($cek_barang);

		if(count($dt) != 0){

		$query = "INSERT INTO barang_masuk (kode_barang,jumlah,tanggal_masuk,created_by) VALUES ('$kode_barang','$jumlah','$sekarang','$created_by')";
		$hasil = mysqli_query($conn,$query);
		if($hasil){
			$stok = $dt['stok'] + $jumlah;

			$query2 = "UPDATE barang SET stok = '$stok' WHERE kode_barang = '$kode_barang'";
			$dtt = mysqli_query($conn,$query2);
			if($dtt){
				echo "<script>alert('Stok barang berhasil di update')</script>";
				echo "<script>window.open('".$url."index.php?pages=barangmasuk','_self')</script>";
			}

		}


	}else{

						echo "<script>alert('Barang Tidak Ditemukan')</script>";
				echo "<script>window.open('".$url."index.php?pages=barangmasuk','_self')</script>";


	}



	}else if($aksi == "keluarbarang"){
		$kode_barang = $_POST['kode_barang'];
		$jumlah = $_POST['jumlah'];
		$sekarang = date('Y-m-d H:i:s');
		$created_by = $_SESSION['username'];

		$cek_barang = mysqli_query($conn,"SELECT * FROM barang WHERE kode_barang = '$kode_barang'");
		$dt = mysqli_fetch_array($cek_barang);

		if(count($dt) != 0){


			if($dt['stok'] < $jumlah){

				echo "<script>alert('Maaf , Stok Barang Kurang')</script>";
				echo "<script>window.open('".$url."index.php?pages=barangkeluar','_self')</script>";

			}else{

		$query = "INSERT INTO barang_keluar (kode_barang,jumlah,tanggal_keluar,created_by) VALUES ('$kode_barang','$jumlah','$sekarang','$created_by')";
		$hasil = mysqli_query($conn,$query);
		if($hasil){
			$stok = $dt['stok'] -  $jumlah;

			$query2 = "UPDATE barang SET stok = '$stok' WHERE kode_barang = '$kode_barang'";
			$dtt = mysqli_query($conn,$query2);
			if($dtt){
				echo "<script>alert('Stok barang berhasil di update')</script>";
				echo "<script>window.open('".$url."index.php?pages=barangkeluar','_self')</script>";
			}

		}


	}

	}else{

						echo "<script>alert('Barang Tidak Ditemukan')</script>";
				echo "<script>window.open('".$url."index.php?pages=barangkeluar','_self')</script>";


	}



	}
?>