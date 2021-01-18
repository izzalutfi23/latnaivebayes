<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Form Tambah Data Bahan Masakan</h3>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?=base_url('home/bahan')?>">Bahan Masakan</a></li>
					<li class="breadcrumb-item active" aria-current="page"> Add </li>
				</ol>
			</nav>
		</div>
		<div class="row">
			<div class="col-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Tambah Data Bahan Masakan</h4>
						<p class="card-description">Silahkan isi sesuai petunjuk</p>
						<form class="forms-sample" action="<?=base_url('home/postbahan')?>" method="POST">
							<div class="form-group">
								<label>Nama Bahan</label>
								<input type="text" name="bahan" class="form-control">
							</div>
							<button type="submit" class="btn btn-primary mr-2"> Tambah </button>
							<button class="btn btn-light">Cancel</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- content-wrapper ends -->
	<!-- partial:../../partials/_footer.html -->
	<footer class="footer">
		<div class="d-sm-flex justify-content-center justify-content-sm-between">
			<span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
			FRISKA EFRIANA PUTRI RIZKY AMELIA
				2021</span>
			<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
					href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a>
				from
				Bootstrapdash.com</span>
		</div>
	</footer>
	<!-- partial -->
</div>
<!-- main-panel ends -->
