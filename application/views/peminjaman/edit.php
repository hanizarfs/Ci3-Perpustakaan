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
				<h2>Edit Data Peminjaman</h2>
			</div>
			<div class="card-body">
				<form action="<?php echo base_url('peminajaman/update/'.$detail['id']) ?>" method="POST" class="px-5" enctype="multipart/form-data">
				<div class="mt-4">
						<label class="form-label" for="tgl_peminjaman">Tanggal Peminjaman</label>
						<input type="date" name="tgl_peminjaman" value="<?php echo date('Y-m-d'); ?>">
					</div>
					<div class="mt-3">
						<label class="form-label" for="nama">Nama Peminjam</label>
						<select class="form-control" name="nama">
							<?php foreach($nama as $row) { 
								echo '<option value="'.$row->nama.'">'.$row->nama.'</option>';
							} ?>
						</select>
					</div>
					<div class="mt-3">
						<label class="form-label" for="nama-buku">Buku yang di pinjam</label>
						<select class="form-control" name="nama-buku">
							<?php foreach($namaBuku as $namaBuku) { 
								echo '<option value="'.$namaBuku->nama.'">'.$namaBuku->nama.'</option>';
							} ?>
						</select>
					</div>
					<div class="mt-3">
						<label for="tgl_pengembalian">Tanggal Pengembalian</label>
						<input type="date" name="tgl_pengembalian" value="<?php echo date('Y-m-d', strtotime("+7 day")) ?>">
					</div>
					<div class="mt-3">
						<label for="keterangan">Keterangan</label>
						<input type="text" name="keterangan" value="<?php echo $detail['keterangan']; ?>">
					</div>
					<input type="submit" class="btn btn-primary float-end px-4 py-2">
				</form>
			</div>
		</div>
	</div>

</body>

</html>
