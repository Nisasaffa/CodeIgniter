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
	<h2>DATABASE SIM POLRETA BALIKPAPAN</h2>
	<div align="center"><table width="499" border="2">
    <table class="table_datasim">
			<tr>
				<th>No.Registrasi</th>
				<th>No.SIM</th>
				<th>Berlaku</th>
			</tr>
    <?php
  				$query = mysqli_query ($conn, "SELECT * FROM data_sim");
  				while($data = mysqli_fetch_array($query)){
  	?>
    <tr>
				<td><?php echo $data['No_Registrasi']; ?></td>
				<td><?php echo $data['No_SIM']; ?></td>
				<td><?php echo $data['Berlaku']; ?></td>
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
