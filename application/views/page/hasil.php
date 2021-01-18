<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Hasil Uji</h3>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?=base_url('home/uji')?>">Uji</a></li>
					<li class="breadcrumb-item active" aria-current="page">Hasil </li>
				</ol>
			</nav>
		</div>
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Striped Table</h4>
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
									<th>Nilai</th>
									<th>Hasil</th>
									</tr>
								</thead>
								<tbody>
								<?php
									$no=1; 
									foreach($uji as $data){
								?>
								<tr>
									<td><?=$no++?></td>
									<?php
										foreach($data->trainitem as $ditem){
									?>
									<td><?=$ditem->bahan?></td>
									<?php }?>
									<td><?=$data->hasil?></td>
									<td><?=$data->menu?></td>
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
			FRISKA EFRIANA PUTRI RIZKY AMELIA 2021</span>
			<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
					href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a>
				from Bootstrapdash.com</span>
		</div>
	</footer>
	<!-- partial -->
</div>
<!-- main-panel ends -->

