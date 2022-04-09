<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap core CSS and JS-->
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" />
	<title>Add Data to Collection</title>
</head>

<body>
	<?php $this->load->view('layout/header'); ?>
	<div class="container">
		<div class="card mt-5">
			<div class="card-header text-center">
				<h2>Tambah Data Buku</h2>
			</div>
			<div class="card-body">
				<form action="<?php echo base_url('collection/update/'.$detail['id']) ?>" method="POST" class="px-5" enctype="multipart/form-data">
					<label class="form-label" for="nama">Nama Judul Buku : </label>
					<input class="form-control" type="text" name="nama" value="<?php echo $detail['nama']; ?>"><br>
					<label class="form-label" for="penerbit">Penerbit</label>
					<input class="form-control" type="text" name="penerbit" id="penerbit" value="<?php echo $detail['penerbit']; ?>"><br>
					<label class="form-label" for="penulis">Penulis</label>
					<input class="form-control" type="text" name="penulis" id="penulis" value="<?php echo $detail['penulis']; ?>"><br>
					<label class="form-label" for="kategori">Kategori</label>
					<input class="form-control" type="text" name="kategori" id="kategori" value="<?php echo $detail['kategori']; ?>"><br>
					<label class="form-label" for="cover">Cover Buku</label>
					<input class="form-control" type="file" name="cover" id="cover"><br>
					<input type="submit" class="btn btn-primary float-end px-4 py-2">
				</form>
			</div>
		</div>
	</div>

</body>

</html>
