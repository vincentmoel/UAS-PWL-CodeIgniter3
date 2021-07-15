<style>
	/* Ubah warna tabel */
	.table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
		background-color: white;
	}

	.table-striped > tbody > tr:nth-child(2n) > td, .table-striped > tbody > tr:nth-child(2n) > th {
	background-color: #F0FFFF;
	}
	/* SELESAI Ubah warna tabel */


</style>






<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaltambahdata">
	<i class="fas fa-plus"></i>	 Add Barang
</button>


<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Gambar</th>
		<th>Kode</th>
		<th>Nama Barang</th>
		<th>Harga</th>
		<th style="text-align: center">Aksi</th>
	</tr>

	<?php
	$no = 1;
	foreach ($barang as $brg):?>

		<tr>
			<td> <?php echo $no++ ?> </td>
			<td><img src="<?php echo base_url().'/gambar/'.$brg->gambar;?>" width="90px"> </td>
			<td> <?php echo $brg->kode ?> </td>
			<td> <?php echo $brg->nama_barang ?> </td>
			<td> <?php echo $brg->harga ?> </td>

			<td style="text-align: center">
				<?php echo anchor(base_url().'home_controller/controller_delete_data/'.$brg->kode,'<button class="btn btn-danger"><i class="fas fa-minus-circle"></i> Delete</button>');?>
				<button class="btn btn-primary" data-toggle="modal" data-target="#modaleditdata<?php echo $brg->kode;?>"> <i class="far fa-edit"></i> Edit</button>


			</td>
		</tr>

	<?php endforeach; ?>
</table>


<!-- Modal Tambah Data-->
<div class="modal fade" id="modaltambahdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Entry Data Barang</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php echo form_open_multipart('home_controller/controller_tambah_data');?>
					<div class="form-group">
						<label for="kode">Kode</label>
						<input type="text" name="kode" id="kode" class="form-control" required>
					</div>

					<div class="form-group">
						<label for="nama">Nama Barang</label>
						<input type="text" name="nama_barang" id="nama" class="form-control" required>
					</div>

					<div class="form-group">
						<label for="harga">Harga</label>
						<input type="text" name="harga" id="harga" class="form-control" required>
					</div>

					<div class="form-group">
						<label for="gambar">Gambar</label>
						<input type="file" name="gambar" size="20" class="form-control" required>
					</div>

					<button type="reset" class="btn btn-danger">Reset</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				<?php echo form_close();?>
			</div>
		</div>
	</div>
</div>


<!-- Modal EDIT Data-->
<?php $no = 0;
foreach ($barang as $brg) : $no++;?>
	<div class="modal fade" id="modaleditdata<?php echo $brg->kode;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Entry Data Barang</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php echo form_open_multipart('home_controller/controller_edit_data');?>

						<div class="form-group">
							<label for="kode">Kode Barang</label>
							<!--disabled tidak bisa kirim value-->
							<input type="text" name="kode" id="kode" class="form-control" value="<?php echo $brg->kode;?>" disabled>
							<input type="text" name="kode" id="kode" class="form-control" value="<?php echo $brg->kode;?>" hidden>
						</div>

						<div class="form-group">
							<label for="nama">Nama Barang</label>
							<input type="text" name="nama_barang" id="nama" class="form-control" value="<?php echo $brg->nama_barang;?>" required>
						</div>

						<div class="form-group">
							<label for="harga">Harga</label>
							<input type="text" name="harga" id="harga" class="form-control" value="<?php echo $brg->harga;?>" required>
						</div>

						<div class="form-group">
							<label for="gambar">Gambar</label>
							<input type="text" name="gambarLama" id="gambar" class="form-control" value="<?php echo $brg->gambar;?>" hidden>
							<input type="file" name="gambar" id="gambar" class="form-control">
						</div>

						<button type="reset" class="btn btn-danger">Reset</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					<?php echo form_close();?>

				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>
