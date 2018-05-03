<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>POLRESTA BALIKPAPAN</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</head>
<body>
  <style type="text/css">
    @import url(main.css);
    @import url(beranda.css);
     </style>
     <header>
       <h1 class="judul">POLRESTA BALIKPAPAN</h1>
       <button class="tombol">MENU</button>
       <nav class="menu">
         <div class="logo-flat">
                   <img alt="personal-logo" class="img-responsive" src="Lambang.png">
               </div>
               <br>
         <h4>MENU</h4>
         <ul>
           <li><a href="Beranda.html"><i class="title-icon fa fa-user"></i>BERANDA</a>
           <li class="pelayanan-dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="title-icon fa fa-user"></i>LAYANAN</a>
               <ul class="dropdown-menu">
               <li><a href="Datasim.php">Database SIM</a></li>
               <li><a href="Datapemohon.php">Data Pemohon SIM</a></li>
               </ul>
         </ul>
       </nav>
     </header>
<div class="container">
	<br>
	<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "<div style='margin-bottom:20px' class='alert alert-danger text-center' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>Data yang diinput telah digunakan</div>";
		}
	}
	?>
	<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "berhasilhapus"){
			echo "<div style='margin-bottom:20px' class='alert alert-success text-center' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>Data berhasil dihapus</div>";
		}
	}
	?>
	<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "berhasilubah"){
			echo "<div style='margin-bottom:20px' class='alert alert-success text-center' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>Data berhasil disimpan</div>";
		}
	}
	?>
	<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "berhasiltambah"){
			echo "<div style='margin-bottom:20px' class='alert alert-success text-center' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>Data baru telah ditambahkan</div>";
		}
	}
	?>
	<h1>Data Pemohon</h1>
	<a href="tambahSiswa.php"><button class="btn btn-primary btn-sm" type="button">Tambah Data</button></a><br><br>
	<div class="card">
		<table class="table table-fixed">
			<!--judul table-->
			<tr>
        <th>No.Registrasi</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Kewarganegaraan</th>
        <th>Tinggi Badan</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Pekerjaan</th>
        <th>No.Tlp</th>
        <th>ID SIM</th>
        <th>Status Kesehatan</th>
				<th><i class='fa fa-pencil'></i> Ubah Data</th>
				<th><i class='fa fa-trash'></i> Hapus Data</th>
			</tr>
			<?php
			include "connection.php";
			$query = "SELECT * FROM pemohon";
			$sql = mysqli_query($conn, $query);
			while($data = mysqli_fetch_array($sql)){
        echo "<tr>";
        echo "<td>".$data['No_Registrasi']."</td>";
        echo "<td>".$data['Nama_Lengkap']."</td>";
        echo "<td>".$data['Jenis_Kelamin']."<td>".;
        echo "<td>".$data['Kewarganegaraan']."<td>".;
        echo "<td>".$data['Tinggi_Badan']."<td>".;
        echo "<td>".$data['Tempat_Lahir']."<td>".;
        echo "<td>".$data['Tanggal_Lahir']."<td>".;
        echo "<td>".$data['Alamat_Lengkap']."<td>".;
        echo "<td>".$data['Pekerjaan']."<td>".;
        echo "<td>".$data['No_Tlp']."<td>".;
        echo "<td>".$data['ID_SIM']."<td>".;
        echo "<td>".$data['Status_Kesehatan']; ?></td>
				echo "<td><a href='updatePemohon.php?No_Registrasi=".$data['No_Registrasi']."'><button class='btn btn-primary btn-sm' type='button'><i class='fa fa-pencil'></i> Ubah</button></a></td>";
				echo "<td><a href='deletePemohon.php?No_Registrasi=".$data['No_Registrasi']."'><button class='btn btn-danger btn-md' type='button'><i class='fa fa-trash-o'></i></button></a></td>";
				echo "</tr>";
			}
			?>
		</table>
	</div>
</div>
</body>
</html>
