<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Datatable -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
	<title><?=$title?></title>
</head>

<body>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="<?=base_url('home')?>">Naive Bayes</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?=base_url('home')?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=base_url('home/training')?>">Data Training</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=base_url('home/uji')?>">Data Uji</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=base_url('home/bahan')?>">Bahan</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=base_url('home/menu')?>">Menu</a>
				</li>
			</ul>
		</div>
	</nav>
	<!-- End Navbar -->
