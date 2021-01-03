<div class="container mt-4">
	<div class="row mb-3">
		<div class="col-lg-6">
			<h2>Tambah Data Training</h2>
		</div>
		<div class="col-lg-6">
			<button class="btn btn-primary float-right">Kembali</button>
		</div>
	</div>
	<div class="row mb-3">
		<div class="col-lg-6">
			<form action="<?=base_url('home/create')?>" method="POST">
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
					<label>Hasil</label>
					<select name="id_menu" class="form-control">
                        <?php 
                            foreach($menu as $data){
                        ?>
                        <option value="<?=$data->id_menu?>"><?=$data->menu?></option>
                        <?php } ?>
                    </select>
				</div>
				<button type="submit" class="btn btn-primary">Tambah</button>
			</form>
		</div>
	</div>
</div>
