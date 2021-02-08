<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Form Tambah Data Training</h3>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?=base_url('home/training')?>">Training</a></li>
					<li class="breadcrumb-item active" aria-current="page"> Add </li>
				</ol>
			</nav>
		</div>
		<div class="row">
			<div class="col-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Tambah Data Training</h4>
						<p class="card-description">Silahkan isi sesuai petunjuk</p>
						<form class="forms-sample" action="<?=base_url('home/create')?>" method="POST">
							<div class="form-group">
								<label>Bahan 1</label>
								<select name="id_bahan[]" class="form-control">
									<option value="19">( Kosong )</option>
									<?php 
                                        foreach($bahan as $data){
                                    ?>
									<option value="<?=$data->id_bahan?>"><?=$data->bahan?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<label>Bahan 2</label>
								<select name="id_bahan[]" class="form-control">
									<option value="19">( Kosong )</option>
									<?php 
                                        foreach($bahan as $data){
                                    ?>
									<option value="<?=$data->id_bahan?>"><?=$data->bahan?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<label>Bahan 3</label>
								<select name="id_bahan[]" class="form-control">
									<option value="19">( Kosong )</option>
									<?php 
                                        foreach($bahan as $data){
                                    ?>
									<option value="<?=$data->id_bahan?>"><?=$data->bahan?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<label>Bahan 4</label>
								<select name="id_bahan[]" class="form-control">
									<option value="19">( Kosong )</option>
									<?php 
                                        foreach($bahan as $data){
                                    ?>
									<option value="<?=$data->id_bahan?>"><?=$data->bahan?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<label>Bahan 5</label>
								<select name="id_bahan[]" class="form-control">
									<option value="19">( Kosong )</option>
									<?php 
                                        foreach($bahan as $data){
                                    ?>
									<option value="<?=$data->id_bahan?>"><?=$data->bahan?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<label>Bahan 6</label>
								<select name="id_bahan[]" class="form-control">
									<option value="19">( Kosong )</option>
									<?php 
                                        foreach($bahan as $data){
                                    ?>
									<option value="<?=$data->id_bahan?>"><?=$data->bahan?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<label>Bahan 7</label>
								<select name="id_bahan[]" class="form-control">
									<option value="19">( Kosong )</option>
									<?php 
                                        foreach($bahan as $data){
                                    ?>
									<option value="<?=$data->id_bahan?>"><?=$data->bahan?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<label>Hasil</label>
								<input type="text" name="menu" class="form-control">
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
