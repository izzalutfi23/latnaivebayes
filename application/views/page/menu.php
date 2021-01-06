<!-- Section -->
<div class="container mt-4">
	<div class="row mb-3">
		<div class="col-lg-6">
			<h2>Data Menu</h2>
		</div>
		<div class="col-lg-6">
			<a href="<?=base_url('home/addmenu')?>"><button class="btn btn-primary float-right">Tambah
					Menu</button></a>
		</div>
	</div>
	<table id="example" class="table table-striped table-bordered" style="width:100%">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Menu</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
                $no=1; 
                foreach($menu as $data){
            ?>
			<tr>
				<td><?=$no++?></td>
				<td><?=$data->menu?></td>
				<td>
					<a onclick="return confirm('Data akan dihapus!')"
						href="<?=base_url('home/delmenu/'.$data->id_menu)?>"><button
							class="btn btn-danger btn-sm">Hapus</button></a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
<!-- End Section -->
