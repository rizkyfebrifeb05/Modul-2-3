<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwE0ngsV7Zt27NXFoaoApmYm81iuXoPkF0JwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" href="<?= base_url(); ?>asset/css/style.css">

	<title><?php echo $judul; ?></title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">CI App</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAllMarkup" aria-control="navbarNavAllMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAllMarkup">
				<div class="navbar-nav">
					<a class="nav-item nav-link" href="<?= base_url() ?>">Home
						<span class="sr-only">[current]</span></a>
					<a class="nav-item nav-link" href="<?= base_url(); ?>mahasiswa">Mahasiswa</a>
					<a class="nav-item nav-link" href="<?= base_url(); ?>peoples">Peoples</a>
					<a class="nav-item nav-link" href="#">About</a>
				</div>
			</div>
		</div>
	</nav>

</body>
</html>