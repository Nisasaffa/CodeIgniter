<?php
include "connection.php";
$No_Registrasi = $_GET['No_Registrasi'];
$query = "SELECT * FROM pemohon WHERE No_Registrasi='".$No_Registrasi."'";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_array($sql);
$query2 = "DELETE FROM pemohon WHERE No_Registrasi='$No_Registrasi'";
$sql2 = mysqli_query($conn, $query2);
if($sql2){
	echo '<center><strong>Berhasil</strong></center><br>';
	header("location: adminSiswa.php?pesan=berhasilhapus");
}else{
	echo "Gagal<a href='adminSiswa.php'>Kembali</a>";
}
?>
