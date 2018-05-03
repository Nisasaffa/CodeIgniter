<?php
include 'connection.php';
if (isset($_POST['No_Registrasi']) && isset($_POST['Nama_Lengkap']) && isset($_POST['Jenis_Kelamin']) && isset($_POST['Kewarganegaraan']) && isset($_POST['Tinggi_Badan'])
&& isset($_POST['Tempat_Lahir']) && isset($_POST['Tanggal_Lahir']) && isset($_POST['Alamat_Lengkap']) && isset($_POST['Pekerjaan'])
&& isset($_POST['No_Tlp']) && isset($_POST['ID_SIM']) && isset($_POST['Status_Kesehatan']))
		{
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
			$result = mysqli_query($conn,"SELECT No_Registrasi,Nama_Lengkap,Jenis_Kelamin,Kewarganegaraan,Tinggi_Badan,Tempat_Lahir,Tanggal_Lahir,Alamat_Lengkap,
        Pekerjaan,No_Tlp,ID_SIM,Status_Kesehatan FROM siswa WHERE
         (No_Registrasi='$No_Registrasi' OR Nama_Lengkap='$Nama_Lengkap' OR Jenis_Kelamin='$Jenis_Kelamin' OR Kewarganegaraan='$Kewarganegaraan' OR Tinggi_Badan='$Tinggi_Badan'
            OR Tempat_Lahir='$Tempat_Lahir' OR Tanggal_Lahir='$Tanggal_Lahir' OR Alamat_Lengkap='$Alamat_Lengkap' OR Pekerjaan='$Pekerjaan' OR No_Tlp='$No_Tlp'
            OR ID_SIM='$ID_SIM' OR Status_Kesehatan='$Status_Kesehatan')");
			if (mysqli_num_rows($result) > 0)
			{
				echo '<center><strong>Mohon maaf, data yang anda masukkan telah digunakan</strong></center><br>';
				header("location: adminSiswa.php?pesan=gagal")
				?>
				<?php
			}
			else
			{
				$result = mysqli_query($conn,$sql) or mysqli_error($conn);
				echo '<center><strong>Berhasil</strong></center><br>';
				header("location: adminSiswa.php?pesan=berhasiltambah");
		}
	}
?>
