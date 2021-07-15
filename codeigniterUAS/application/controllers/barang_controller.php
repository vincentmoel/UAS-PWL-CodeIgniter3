<?php

class barang_controller extends CI_Controller
{


	public function index()
	{

		$this->load->view('templates/header');

//		$this->load->model('m_brg'); //load local
		$data['barang'] = $this->m_brg->tampil_data()->result();
		$this->load->view('barang_view', $data);

		$this->load->view('templates/footer');

	}

	public function controller_tampil_detail_barang($where)
	{
		$data['barang'] = $this->m_brg->tampil_detail_data("barang_uas","kode",$where)->result();


		$this->load->view('templates/header');
		$this->load->view('detail_view', $data);
		$this->load->view('templates/footer');

	}
}
?>
