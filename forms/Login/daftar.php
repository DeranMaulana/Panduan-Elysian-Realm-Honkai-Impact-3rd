<?php

include('koneksi.php');



?>

<!doctype html>
<html lang="en">
<head>
	<title>Daftar - ER</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="../Valkyrie/Aset/Signet/Elysia.png" rel="icon">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<section class="ftco-section">
		<div class="container mx-auto">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex align-middle mt-5">
						<div class="img" style="background-image: url(images/ely.png);">
						</div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Daftar</h3>
								</div>
							</div>
							<form action="proses_daftar.php" method="POST" class="signin-form">
								<div class="form-group mb-3">
									<label class="label" for="name">Nama</label>
									<input type="text" name="nama" class="form-control" placeholder="Nama" required>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="name">Username</label>
									<input type="text" name="username" class="form-control" placeholder="Username" required>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="password">Password</label>
									<input type="password" name="password" class="form-control" placeholder="Password" required>
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3">Daftar</button>
								</div>
							</form>
							<p class="text-center">Sudah punya akun ? <a href="login.php">Login</a> | <a
									href="../../index.php">Kembali</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>