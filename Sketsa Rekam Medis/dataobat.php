<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Data Obat</title>
</head>
<body>
	<table border="1" width="1890px" height="950px">
		<tr>			
			<header>
				<td colspan="5" height="200px">
					<br>
					<div class="image">
						<center><img src="img/logo.png" width="200px" height="200px" alt="">

						</div>
						<div class="font">
							<center><h1>REKAM MEDIS PUSKESMAS BAKTI HUSADA</h1>
								<center><h2>Jalan Barito Blok EH No.7, Tropodo, Waru, Tropodo, Waru, Kabupaten Sidoarjo, Jawa Timur 61256</h2></center>
							</div>
						</td>
					</header>
				</tr>
				<tr>
					<td rowspan="1" width="200px">
						<ol type="A">
							
							<a href="login.php"><input type="submit" value="Logout" style="width: 100px; height: 50px;"></a>
							
							<li><h3><a href="datauser.php">Data Pasien</a></h3></li>
							<li><h3><a href="dataobat.php">Data Obat</a></h3></li>
							<li><h3><a href="datalayanan.php">Data Layanan Poli</a></h3></li>
						</ol>
					</td>
					<td colspan="5" width="50px" height="600px">
						<table width="690px" height="50px">
							<tr>
								<td width="170px"></td>
								<td width="120px">
									<center><div class="btn-tambah">
										<a href="tambahdataobat.php"><button type="submit" value="Tambah Data" style="width: 110px; height: 40px;">Tambah Data</button></a>
									</div>
								</td>
								<td width="120px">
									<center><div class="btn-cari">
										<a href="dataobat.php"><button type="submit" value="Tambah Data" style="width: 110px; height: 40px;">Search</button></a>
									</div>
								</td>
								<td width="400px">
									<div class="btn-cari">
										<input type="text" style="width: 300px; height: 30px;">
									</div>
								</td>
							</tr>
							
						</table>
						<center><table border="1" width="1500px" height="500px" style="text-align: center;">
							<tr>
								<td colspan="10"><b>DATA OBAT</b></td>
							</tr>
							<tr border="1">
								<th>NO</th>
								<th>Kode Obat</th>
								<th>Nama Obat</th>
								<th>Ketegori</th>
								<th>Stok Obat</th>
								<th>Satuan</th>
								<th>Tgl Expired</th>
								<th>Manage</th>
							</tr>
							<tr>
								<td>1</td>
								<td>AOK1011</td>
								<td>Kalsium Glukonat</td>
								<td>Antidot dan Obat untuk Keracunan</td>
								<td>22</td>
								<td>BOX</td>
								<td>18-12-2019</td>
								<td>
									<input type="submit" value="Edit">
									<input type="submit" value="Delete">
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>AOA1012</td>
								<td>Cetrizin</td>
								<td>Antialergi dan Obat untuk Anafilaksis</td>
								<td>17</td>
								
								<td>BOX</td>
								<td>10-02-2019</td>
								<td>
									<input type="submit" value="Edit">
									<input type="submit" value="Delete">
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td>AI01013</td>
								<td>Amoksilin</td>
								<td>Anti Infeksi</td>
								<td>2</td>
								
								<td>BOX</td>
								<td>11-02-2019</td>
								<td>
									<input type="submit" value="Edit">
									<input type="submit" value="Delete">
								</td>
							</tr>
							<tr>
								<td>4</td>
								<td>AI01014</td>
								<td>Benzipenisilin</td>
								<td>Anti Infeksi</td>
								<td>20</td>
								<td>BOX</td>
								<td>22-07-2019</td>
								<td>
									<input type="submit" value="Edit">
									<input type="submit" value="Delete">
								</td>
							</tr>
							<tr>
								<td>5</td>
								<td>AM01015</td>
								<td>Ergotamin</td>
								<td>Anti Migrain</td>
								<td>7</td>
								
								<td>BOX</td>
								<td>30-04-2019</td>
								<td>
									<input type="submit" value="Edit">
									<input type="submit" value="Delete">
								</td>
							</tr>
							<tr>
								<td>6</td>
								<td>APN1016</td>
								<td>Levodopa + Karbidopa</td>
								<td>Antiparkinson</td>
								<td>15</td>
								
								<td>BOX</td>
								<td>17-02-2019</td>
								<td>
									<input type="submit" value="Edit">
									<input type="submit" value="Delete">
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<footer>
						<td rowspan="2" colspan="5" height="200px">
							<table width="1875px" height="70px">
								<tr>
									<td width="500px"></td>
									<td></td>
									<td width="100px">
										<a href="">
											<img height="50px" src="img/facebook.png" alt="">
										</a>
									</td>
									<td width="50px">
										<a href="">
											<img height="50px" src="img/instagram.png" alt="">
										</a>
									</td>
								</tr>
							</table>
							<hr>
							<div class="row">
								<center>&copy; Muhammad Iqbal Aulia Rafi' - 2018
								</div>
							</td>
						</footer>
					</tr>
				</table>
			</body>
			</html>