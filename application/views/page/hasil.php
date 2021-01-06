<!-- Section -->
<div class="container mt-4">
	<div class="row mb-3">
		<div class="col-lg-6">
			<h2>Hasil</h2>
		</div>
		<div class="col-lg-6">
			<a href="<?=base_url('home/uji')?>"><button class="btn btn-primary float-right">Kembali</button></a>
		</div>
	</div>
	<table id="example" class="table table-striped table-bordered" style="width:100%">
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
<!-- End Section -->
