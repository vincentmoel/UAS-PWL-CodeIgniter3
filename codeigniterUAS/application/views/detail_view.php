<style>
	body{
		background-color: #E6E6FA;
	}

	table tr td{
		padding-left:40px;
		font-size: 30px;
	}

	table tr th img{
		width: 400px;
	}

	.container2{
		padding-top:30px;
		padding-left: 100px;
	}

</style>


<div class="container2">
	<h1>Detail Produk</h1>
	<hr>
	<?php
	foreach ($barang as $brg):?>
		<table>
			<tr>
				<th rowspan="5"><img src="<?php echo base_url().'gambar/'.$brg->gambar;?>"></th>
				<td style="padding-bottom: 20px"><?php echo $brg->nama_barang ?></td>

			</tr>
			<tr>
				<td>Harga : <?php echo $brg->harga ?></td>

			</tr>
			<tr>
				<td>Nama Produk : <?php echo $brg->nama_barang ?></td>

			</tr>
			<tr>
				<td>Stok : Tersedia</td>

			</tr>
			<tr>
				<td><button type="button" class="btn btn-primary">Tambahkan ke Tas Belanja</button></td>

			</tr>
		</table>
		<hr>
		<h1>Deskripsi Produk</h1>
		<?php echo $brg->nama_barang ?>
	<?php endforeach; ?>
</div>
