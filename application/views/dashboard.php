<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap core CSS and JS-->
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" />


	<title>Dashboard Perpustakaan</title>
</head>

<body>
	<?php $this->load->view('layout/header'); ?>
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h1>Hello, nama saya <?php echo $this->session->userdata('nama'); ?></h1>
			</div>
			<div class="card-body">
			<div class="row">
				<div class="col-2">
					<h2>Alamat</h2>
				</div>
				<div class="col-10">
				<h2><?php echo $this->session->userdata('alamat'); ?></h2>
				</div>
			</div>
				<div class="row">
					<div class="col-2"><h2>Hobi</h2></div>
					<div class="col-10">
						<ul>
							<?php foreach($hobi as $i) {?>
								<h2>
									<li> <?php echo $i; ?></li>
								</h2>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>



	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.js'); ?>"></script>

</body>

</html>
