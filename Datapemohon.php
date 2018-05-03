<html>
<head>
	<title>POLRESTA BALIKPAPAN</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <?php
  include 'connection.php';
  ?>
  <style type="text/css">
	 @import url(main.css);
   @import url(beranda.css);
	</style>
</head>
<body>
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
	<h2>DATA PEMOHON SIM POLRETA BALIKPAPAN</h2>
  <div align="center"><table width="499" border="2">
    <table class="table_datasim">
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
          <!-- <th>Foto</th> -->
  			</tr>
  			<?php
  				$query = mysqli_query ($conn, "SELECT * FROM pemohon");
  				while($data = mysqli_fetch_array($query)){
  			?>
  			<tr>
  				<td><?php echo $data['No_Registrasi']; ?></td>
  				<td><?php echo $data['Nama_Lengkap']; ?></td>
  				<td><?php echo $data['Jenis_Kelamin']; ?></td>
  				<td><?php echo $data['Kewarganegaraan']; ?></td>
  				<td><?php echo $data['Tinggi_Badan']; ?></td>
  				<td><?php echo $data['Tempat_Lahir']; ?></td>
          <td><?php echo $data['Tanggal_Lahir']; ?></td>
          <td><?php echo $data['Alamat_Lengkap']; ?></td>
          <td><?php echo $data['Pekerjaan']; ?></td>
  				<td><?php echo $data['No_Tlp']; ?></td>
          <td><?php echo $data['ID_SIM']; ?></td>
          <td><?php echo $data['Status_Kesehatan']; ?></td>
          <!-- <td><img src ="<?php echo $data['Foto']?>" width="20%"></td> -->
  			</tr>
  			<?php } ?>
        </table>
      </div>
<script type="text/javascript">
		$(document).ready(function(){
			$('.tombol').click(function(){
				$('.menu').toggleClass("slide-menu-tampil");
			});
		});
	</script>
</body>
</html>
