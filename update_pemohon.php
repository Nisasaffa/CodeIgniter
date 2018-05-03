<?php
include "connection.php";
$No_Registrasi = $_GET['No_Registrasi'];
$Nama_Lengkap = $_POST['Nama_Lengkap'];
$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
$Kewarganegaraan = $_POST['Kewarganegaraan'];
$Tinggi_Badan = $_POST['Tinggi_Badan'];
$Tempat_Lahir = $_POST['Tempat_Lahir'];
$Tanggal_Lahir= $_POST['Tanggal_Lahir'];
$Alamat_Lengkap= $_POST['Alamat_Lengkap'];
$Pekerjaan= $_POST['Pekerjaan'];
$No_Tlp= $_POST['No_Tlp'];
$ID_SIM= $_POST['ID_SIM'];
$Status_Kesehatan= $_POST['Status_Kesehatan'];
$query = "SELECT * FROM pemohon WHERE No. Registrasi ='".$No_Registrasi."'";
		$sql = mysqli_query($conn, $query);
		$data = mysqli_fetch_array($sql);
		$query = "UPDATE pemohon SET Nama='".$Nama_Lengkap."', Jenis Kelamin='".$Jenis_Kelamin."', Kewarganegaraan='".$Kewarganegaraan."',
  Tinggi Badan='".$Tinggi_Badan."', Tempat Lahir='".$Tempat_Lahir."', Tanggal Lahir='".$Tanggal_Lahir."', Alamat='".$Alamat_Lengkap."',
  Pekerjaan='".$Pekerjaan."', No.Tlp='".$No_Tlp."', ID SIM='".$ID_SIM."', Status Kesehatan='".$Status_Kesehatan."' WHERE No. Registrasi ='".$No_Registrasi."'";
	$sql = mysqli_query($conn, $query);
		header("location: adminPemohon.php?pesan=berhasilubah");

		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='editpemohon.php'>Kembali Ke Form</a>";
?>
