<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap core CSS and JS-->
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" />

	<title>Collection Perpustakaan</title>
</head>

<body>
	<?php $this->load->view('layout/header'); ?>

	<div class="container">
		<?php if ($this->session->flashdata('pesan') != '') { ?>
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<?php echo $this->session->flashdata('pesan'); ?>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		<?php } ?>
		<div class="card">
			<div class="card-header">
				<h1>Data Buku Perpustakaan</h1>
			</div>
			<div class="card-body">
				<a href="collection/add" class="btn btn-primary">[+] Tambah Data</a>
				<table class="table table-bordered mt-3">
					<tr>
						<th>ID</th>
						<th>Nama</th>
						<th>Penerbit</th>
						<th>Penulis</th>
						<th>Kategori</th>
						<th>Cover</th>
						<th>Aksi</th>
					</tr>
					<?php foreach($list as $item) { ?>
					<tr>
						<?php // Khusus row_array()
							// echo $item['id']; ?>
						<td> <?php echo $item->id; ?> </td>
						<td> <?php echo $item->nama; ?> </td>
						<td> <?php echo $item->penerbit; ?> </td>
						<td> <?php echo $item->penulis; ?> </td>
						<td> <?php echo $item->kategori; ?> </td>
						<td> <img src="<?php echo $item->cover; ?>" alt="" height="50"> </td>
						<td>
							<a href="collection/detail/<?php echo $item->id; ?>" class="btn btn-info">Detail</a>
							<a href="collection/edit/<?php echo $item->id; ?>" class="btn btn-warning">Edit</a>
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
				window.location.href = 'collection/delete/' + id;
			}
		}
	</script>
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.js'); ?>"></script>
</body>

</html>
