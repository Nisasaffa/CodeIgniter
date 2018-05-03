<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
	<!-- script -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>
  <title>POLRESTA BALIKPAPAN</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
     <br>
<div class="card">
	<div class="container">
		<?php
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "<div style='margin-bottom:55px' class='alert alert-danger text-center' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>Data yang diinput telah digunakan</div>";
			}
		}
		?>
		<?php
		include "connection.php";
		$No_Registrasi = $_GET['No_Registrasi'];
		$query = "SELECT * FROM pemohon WHERE No_Registrasi='".$No_Registrasi."'";
		$sql = mysqli_query($conn, $query);
		$data = mysqli_fetch_array($sql);
		?>
		<form method="post" action="b_edit_pemohon.php?No_Registrasi=<?php echo $No_Registrasi; ?>" enctype="">
			<p class="h4 text-center py-4">Ubah Data Pemohon</p>
			<center>
        <form>
        <label class="form">Nama Lengkap</label>
				<input type="text" name="Nama_Lengkap" placeholder="" value="<?php echo $data['Nama_Lengkap'] ?>">
        <br><br>
        <label class="form">Jenis Kelamin</label>
				<input type="text" name="Jenis_Kelamin" placeholder="" value="<?php echo $data['Jenis_Kelamin'] ?>">
        <br><br>
        <label class="form">Kewarganegaraan</label>
        <input type="text" name="Kewarganegaraan" placeholder="" value="<?php echo $data['Kewarganegaraan'] ?>">
        <br><br>
        <label class="form">Tinggi  Badan</label>
        <input type="text" name="Tinggi_Badan" placeholder="" value="<?php echo $data['Tinggi_Badan'] ?>">
        <br><br>
        <label class="form">Tempat Lahir</label>
        <input type="text" name="Tempat_Lahir" placeholder="" value="<?php echo $data['Tempat_Lahir'] ?>">
        <br><br>
        <label class="form">Tanggal Lahir</label>
        <input type="text" name="Tanggal_Lahir" placeholder="" value="<?php echo $data['Tanggal_Lahir'] ?>">
        <br><br>
        <label class="form">Alamat</label>
        <input type="text" name="Alamat_Lengkap" placeholder="" value="<?php echo $data['Alamat_Lengkap'] ?>">
        <br><br>
        <label class="form">Pekerjaan</label>
        <input type="text" name="Pekerjaan" placeholder="" value="<?php echo $data['Pekerjaan'] ?>">
        <br><br>
        <label class="form">No.Tlp</label>
        <input type="text" name="No_Tlp" placeholder="" value="<?php echo $data['No_Tlp'] ?>">
        <br><br>
        <label class="form">ID SIM</label>
        <input type="text" name="ID_SIM" placeholder="" value="<?php echo $data['ID_SIM'] ?>">
        <br><br>
        <label class="form">Status Kesehatan</label>
        <input type="text" name="Status_Kesehatan" placeholder="" value="<?php echo $data['Status_Kesehatan'] ?>">
			  </form>
    </center>
			<br>
			<br><br>
			<center class="mb-3"><input type="submit" class="btn btn-primary" value="Simpan">
				<input class="btn btn-danger" type="button" onclick="konfirmasi()" value="Batal"></center>
			</form>
			<script type='text/javascript'>
				function konfirmasi() {
					var answer = confirm('Ingin meninggalkan form?')
					if (answer){
						window.location = 'adminSiswa.php';
					}
				}
			</script>
		</body>
		</html>
