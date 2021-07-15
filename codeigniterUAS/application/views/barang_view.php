<style>
body{
	background-color: #E0FFFF;
}


/*Header Start*/
.header{
	width: 100%;
	background-color: #00BFFF;
	padding-top: 10px;
}

.logo{
	display: inline-block;
}

.logo img{
	height: 20%;
	width: 20%;
	margin: 10px;
}

.header_content{
	display: inline-block;
	text-align: center;

}
/*Header End*/

/*Content Start*/
.card{
	width: 30%;
	margin: 1.66%;
}

.card img{
	width: 50%;
	margin: auto;
}

.container2{
	padding-left: 5%;
	padding-right: 5%;
	text-align: center;
	display: flex;
	flex-wrap: wrap;
	justify-content: flex-start;
}
/*Content End*/


/*Footer Start*/
.footer{
	width: 100%;
	height: 50px;
	background-color: #337AB7;
	padding-top: 5px;
}

.footer_content h6{
	text-align: center;
	color: white;
}
/*Footer End*/

/*Mengatur barang_controller*/
p{
	color: black;
}
</style>




<!--Header-->

<div class="header">
	<div class="logo">
		<img src="./gambar/asset/logo/logo.jpg" class="gambarLogo">
	</div>
	<div class="header_content">
		<h5>Ujian Akhir Semester Genap TA 2020/2021</h5>
		<h5>Menjual Segala Jenis Barang Kelontong</h5>
	</div>
</div>

<!--End Header-->





<!--Content-->
<div class="container2">
	<?php
	foreach ($barang as $brg):?>

		<div class="card">
			<img class="card-img-top" src="<?php echo base_url().'/gambar/'.$brg->gambar;?>" alt="Card image cap">
			<div class="card-body">
				<?php echo anchor(base_url().'barang_controller/controller_tampil_detail_barang/'.$brg->kode,'<p>'.$brg->nama_barang.'<br> Rp.'.$brg->harga.'</p>');?>
			</div>
		</div>

	<?php endforeach; ?>
</div>
<!--End Content-->




<!--Footer-->
<div class="footer">
	<div class="footer_content">
		<h6>Dibuat Oleh : A11.2019.11652 - Vincent Nathaniel M</h6>
	</div>
</div>
<!--End Footer-->



