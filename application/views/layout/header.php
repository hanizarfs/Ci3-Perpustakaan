<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<a class="navbar-brand" href="#">
			<img src="https://t-2.tstatic.net/tribunnewswiki/foto/bank/images/logo-tiga-serangkai-penerbit-buku.jpg"
				alt="Logo Tiga Serangkai" class="img-fluid w-25">
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex w-100 justify-content-end">
				<li class="nav-item ms-1">
					<a class="nav-link" href="<?php echo base_url('dashboard') ?>">Dashboard</a>
				</li>
				<li class="nav-item ms-1">
					<a class="nav-link" href="<?php echo base_url('about') ?>">About</a>
				</li>
				<li class="nav-item ms-1">
					<a class="nav-link" href="<?php echo base_url('user') ?>">User</a>
				</li>
				<li class="nav-item ms-1">
					<a class="nav-link" href="<?php echo base_url('collection') ?>">Koleksi</a>
				</li>
				<li class="nav-item ms-1">
					<a class="nav-link" href="<?php echo base_url('peminjaman') ?>">Peminjaman</a>
				</li>
				<li class="nav-item ms-1">
					<a href="<?php echo base_url('login/logout') ?>" class="btn btn-primary text-light">Logout</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
