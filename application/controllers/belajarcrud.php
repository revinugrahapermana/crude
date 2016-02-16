<?php 
class Belajarcrud extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mdl_matrial','mdl');
	}

	public function index()
	{
		$data['judul'] = 'Matrial Emen';
		$data['barang']=$this->mdl->ambil_data_dari_tabel();
		$this->load->view('view_matrial',$data);
	}

	public function tambahbarang()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('kode_barang','Kode Barang','required');
		$this->form_validation->set_rules('nama_barang','Nama Barang','required');
		$this->form_validation->set_rules('qty','Quantity','required');
		$this->form_validation->set_rules('harga','Harga','required');

		if($this->form_validation->run()==true)
		{
			$this->mdl->input_barang($_POST);
			redirect('belajarcrud/index');
		}
		else
		{
			$this->load->view('tambahbarang');
		}
	}

	public function ubah($kode_barang)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('kode_barang','Kode Barang','required');
		$this->form_validation->set_rules('nama_barang','Nama Barang','required');
		$this->form_validation->set_rules('qty','Quantity','required');
		$this->form_validation->set_rules('harga','Harga','required');

		if($this->form_validation->run()==true)
		{
			$this->mdl->update_data($_POST,$kode_barang);
			redirect('belajarcrud/index');
		}
		else
		{
			$data['kode_barang']=$this->mdl->ambil_id($kode_barang);
			$this->load->view('ubahbarang',$data);
		}
	}

	public function delete($kode_barang)
	{
		$this->mdl->delete_data($kode_barang);
		redirect('belajarcrud/index');
	}
}


 ?>