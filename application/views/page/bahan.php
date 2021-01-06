<!-- Section -->
<div class="container mt-4">
	<div class="row mb-3">
		<div class="col-lg-6">
			<h2>Data Bahan</h2>
		</div>
		<div class="col-lg-6">
			<a href="<?=base_url('home/addbahan')?>"><button class="btn btn-primary float-right">Tambah
					Bahan</button></a>
		</div>
	</div>
	<table id="example" class="table table-striped table-bordered" style="width:100%">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Bahan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
                $no=1; 
                foreach($bahan as $data){
                    if($data->id_bahan!=19){
            ?>
			<tr>
				<td><?=$no++?></td>
				<td><?=$data->bahan?></td>
				<td>
					<a onclick="return confirm('Data akan dihapus!')"
						href="<?=base_url('home/delbahan/'.$data->id_bahan)?>"><button
							class="btn btn-danger btn-sm">Hapus</button></a>
				</td>
			</tr>
			<?php }} ?>
		</tbody>
	</table>
</div>
<!-- End Section -->
