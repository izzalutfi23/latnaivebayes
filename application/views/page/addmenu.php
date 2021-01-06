<div class="container mt-4">
	<div class="row mb-3">
		<div class="col-lg-6">
			<h2>Tambah Data Menu Makanan</h2>
		</div>
		<div class="col-lg-6">
			<button class="btn btn-primary float-right">Kembali</button>
		</div>
	</div>
	<div class="row mb-3">
		<div class="col-lg-6">
			<form action="<?=base_url('home/postmenu')?>" method="POST">
				<div class="form-group">
					<label>Nama Menu</label>
					<input type="text" name="menu" class="form-control">
				</div>
				<button type="submit" class="btn btn-primary">Tambah</button>
			</form>
		</div>
	</div>
</div>
