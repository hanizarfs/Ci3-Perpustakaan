<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap core CSS and JS-->
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" />
	<title>Add Data to Users</title>
</head>

<body>
	<?php $this->load->view('layout/header'); ?>
	<div class="container">
		<div class="card mt-5">
			<div class="card-header text-center">
				<h2>Tambah Data User</h2>
			</div>
			<div class="card-body">
				<form action="<?php echo base_url('user/insert'); ?>" method="POST" class="px-5" enctype="multipart/form-data">
					<label class="form-label" for="nama">Nama User</label>
					<input class="form-control" type="text" name="nama" id="nama"><br>
					<label class="form-label" for="email">Email</label>
					<input class="form-control" type="email" name="email" id="email"><br>
					<label class="form-label" for="password">Password</label>
					<input class="form-control" type="password" name="password" id="password"><br>
					<label class="form-label" for="alamat">Alamat</label>
					<input class="form-control" type="text" name="alamat" id="alamat"><br>
					<label class="form-label" for="telepon">Telepon</label>
					<input class="form-control" type="text" name="telepon" id="telepon"><br>
					<button type="submit" class="btn btn-primary float-end px-4 py-2">Submit</button>
				</form>
			</div>
		</div>
	</div>

</body>

</html>
