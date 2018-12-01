<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('vendor/login-form/style.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<body>
	<div class="container">
		<div class="card card-container">
			<?php echo validation_errors(); ?>
			<img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <form class="form-signin" action="<?php echo site_url('registrasi/tambah_data_customer'); ?>" method="post">
                <div class="">

                </div>
				<div class="form-group">
                    <label>Nomor KTP</label>
                    <input type="text" name="no_ktp" value="<?php echo set_value('no_ktp'); ?>" class="form-control" placeholder="Nomor KTP" required>
                </div>
				<div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" value="<?php echo set_value('nama'); ?>" class="form-control" placeholder="Nama" required>
                </div>
				<div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" value="<?php echo set_value('tanggal_lahir'); ?>" class="form-control" placeholder="Tanggal Lahir" required>
                </div>
				<div class="form-group">
                    <label>Jenis Kelamin</label>
					<div class="radio">
						<label>
							<input type="radio" name="jenis_kelamin" value="L" <?php echo set_value('tanggal_lahir') == "L" ? "checked" : ""; ?> required>
							Laki-laki
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="jenis_kelamin" value="P" <?php echo set_value('tanggal_lahir') == "L" ? "checked" : ""; ?> required>
							Perempuan
						</label>
					</div>
                </div>
				<div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" placeholder="Alamat" required><?php echo set_value('alamat'); ?></textarea>
                </div>
				<div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" name="nomor_telepon" value="<?php echo set_value('nomor_telepon'); ?>" class="form-control" placeholder="Nomor Telepon" required>
                </div>
				<input type="hidden" name="username" value="<?php echo $_SESSION['session_username']; ?>">
				<input type="hidden" name="status" value="<?php echo $_SESSION['session_status']; ?>">
				<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Submit</button>
			</form><!-- /form -->
			Sudah Memiliki Akun ? <a href="<?php echo site_url('auth/index') ?>">Login</a>
		</div><!-- /card-container -->
	</div><!-- /container -->

	<script src="<?php echo base_url('vendor/jquery/jquery-3.3.1.js'); ?>"></script>
	<script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>

</body>
</html>