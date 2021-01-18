<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Data Training</h3>
			<div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
				<button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
					<i class="mdi mdi-plus-circle"></i> <a style="color: #FFF;"
						href="<?=base_url('home/adddatatraining')?>">Data Training</a> </button>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Data Training</h4>
						</p>
						<div class="table-responsive">
							<table class="table table-striped" id="example">
								<thead>
									<tr>
										<th>No</th>
										<th>Bahan 1</th>
										<th>Bahan 2</th>
										<th>Bahan 3</th>
										<th>Bahan 4</th>
										<th>Bahan 5</th>
										<th>Bahan 6</th>
										<th>Hasil</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$no=1; 
										foreach($train as $data){
									?>
									<tr>
										<td><?=$no++?></td>
										<?php
											foreach($data->trainitem as $ditem){
										?>
										<td><?=$ditem->bahan?></td>
										<?php }?>
										<td><?=$data->menu?></td>
										<td>
											<a href="<?=base_url('home/edittrain/'.$data->id_train)?>"><button
													class="btn btn-success btn-sm">Edit</button></a>
											<a onclick="return confirm('Data akan dihapus!')"
												href="<?=base_url('home/deltrain/'.$data->id_train)?>"><button
													class="btn btn-danger btn-sm">Hapus</button></a>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- content-wrapper ends -->

	<!-- partial:partials/_footer.html -->
	<footer class="footer">
		<div class="d-sm-flex justify-content-center justify-content-sm-between">
			<span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
			FRISKA EFRIANA PUTRI RIZKY AMELIA 2020</span>
			<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
					href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a>
				from Bootstrapdash.com</span>
		</div>
	</footer>
	<!-- partial -->
</div>
<!-- main-panel ends -->
