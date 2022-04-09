<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap core CSS and JS-->
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" />

	<title>User Perpustakaan</title>
</head>

<body>
	<?php $this->load->view('layout/header'); ?>
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h1>Data User</h1>
			</div>
			<div class="card-body">
				<a href="user/add" class="btn btn-primary">[+] Tambah User</a>
				<table class="table table-bordered mt-3">
					<tr>
						<th>ID</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Telepon</th>
						<th>Aksi</th>
					</tr>
					<?php foreach($list as $item) { ?>
					<tr>
						<?php // Khusus row_array()
							// echo $item['id']; ?>
						<td> <?php echo $item->id; ?> </td>
						<td> <?php echo $item->nama; ?> </td>
						<td> <?php echo $item->email; ?> </td>
						<td> <?php echo $item->telepon; ?> </td>
						<td> <a href="user/detail/<?php echo $item->id; ?>" class="btn btn-info">Detail</a>
							<a href="user/edit/<?php echo $item->id; ?>" class="btn btn-warning">Edit</a>
							<a onclick="konfirmasi(<?php echo $item->id; ?>)" class="btn btn-danger">Delete</a>
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>



	<script>
		function konfirmasi(id) {
			let text = "Apakah anda yakin untuk menghapus data ini";
			if (confirm(text) == true) {
				window.location.href = 'user/delete/' + id;
			}
		}
	</script>

	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.js'); ?>"></script>

</body>

</html>
