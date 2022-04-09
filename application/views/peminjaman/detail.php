<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=h1, initial-scale=1.0">
	<title>Document</title>

	<!-- Bootstrap core CSS and JS-->
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" />

</head>
<body>
<?php $this->load->view('layout/header'); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Detail User</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Nama <?php echo $detail['nama'] ?> </h4>
                            <h6>Tanggal Peminjaman <?php echo $detail['tgl_peminjaman'] ?> </h6>
                            <h6>Buku Pinjaman <?php echo $detail['buku_yang_di_pinjam'] ?> </h6>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
