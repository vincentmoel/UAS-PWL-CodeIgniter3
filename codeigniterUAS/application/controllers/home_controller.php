<?php

class Home_controller extends CI_Controller
{
	public function index()
	{

		$this->load->view('templates/header');

//		$this->load->model('m_brg'); //load local
		$data['barang'] = $this->m_brg->tampil_data()->result();
		$this->load->view('home_view', $data);

		$this->load->view('templates/footer');

	}

	public function controller_tambah_data()
	{
		// Konfigurasi untuk upload foto
		$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10000;
		$config['max_height']           = 10000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('gambar')) // berdasarkan 'name' kolom input gambar
		{
			echo $this->upload->display_errors();
		}
		else
		{
			$gambar = $this->upload->data();
			$gambar = $gambar['file_name'];

			// Menangkap Dari form yang berada di home_view berdasar "name"
			$kode = $this->input->post('kode');
			$nama_barang = $this->input->post('nama_barang');
			$harga = $this->input->post('harga');

			// Mengubah nya menjadi array
			$data = array(
				'kode' => $kode,
				'nama_barang' => $nama_barang,
				'harga' => $harga,
				'gambar' => $gambar,
			);

			$this->m_brg->tambah_data($data, 'barang_uas');
			redirect(base_url());

		}
	}

	public function controller_edit_data()
	{
		// Konfigurasi untuk upload foto
		$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10000;
		$config['max_height']           = 10000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('gambar')) // berdasarkan 'name' kolom input gambar
		{

			// Menangkap Dari form yang berada di home_view berdasar "name"
			$kode = $this->input->post('kode'); // lokasi where nya
			$nama_barang = $this->input->post('nama_barang');
			$harga = $this->input->post('harga');
			$gambar = $this->input->post('gambarLama');

			// Mengubah nya menjadi array
			$data = array(
				'kode' => $kode,
				'nama_barang' => $nama_barang,
				'harga' => $harga,
				'gambar' => $gambar,
			);

			$this->m_brg->edit_data($kode, $data, 'barang_uas');
			redirect(base_url());
		}
		else
		{
			$gambar = $this->upload->data();
			$gambar = $gambar['file_name'];

			// Menangkap Dari form yang berada di home_view berdasar "name"
			$kode = $this->input->post('kode'); // lokasi where nya
			$nama_barang = $this->input->post('nama_barang');
			$harga = $this->input->post('harga');

			// Mengubah nya menjadi array
			$data = array(
				'kode' => $kode,
				'nama_barang' => $nama_barang,
				'harga' => $harga,
				'gambar' => $gambar,
			);

			$this->m_brg->edit_data($kode, $data, 'barang_uas');
			redirect(base_url());
		}

	}

	public function controller_delete_data($where)
	{
		$kode = array('kode'=>$where);
		$this->m_brg->delete_data($kode,'barang_uas'); // key untuk delete, nama table
		redirect(base_url());

	}
}
