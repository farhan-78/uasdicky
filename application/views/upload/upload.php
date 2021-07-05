<html>

<head>
	<title>Upload Gambar</title>
</head>

<body>	
		<h1> Upload File </h1>
		<form action="<?=base_url("upload/uploadgambar")?>" method="post" enctype="multipart/form-data">
			<input type="file" name="file">
			<input type="submit" name="upload" value="Upload">
		</form>
</body>

</html>