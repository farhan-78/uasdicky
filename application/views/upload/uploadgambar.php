
	<head>
		<title>Upload File </title>
	</head>
	<body>
	<h1> Upload File </h1>
		<?php 
		$koneksi = mysqli_connect("localhost","root","","daftar");
		if($_POST['upload']){
			$ekstensi_diperbolehkan	= array('png','jpg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, 'file/'.$nama);
					$query = mysqli_query($koneksi,"INSERT INTO gambar VALUES(NULL, '$nama')");
					if($query){
						echo 'FILE BERHASIL DI UPLOAD';
					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
					}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}
		}
		?>

		<br/>
		<br/>
		<a href="<?=base_url("upload")?>">Upload Lagi</a>
		<br/>
		<br/>

		<table>
			<?php 
			$data = mysqli_query($koneksi,"select * from gambar");
			while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td>
					<img src=<?=base_url("file/"). $d['name_file'] ?>>
				</td>		
			</tr>
			<?php } ?>
		</table>
	</body>
