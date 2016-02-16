<?php 
class Mdl_matrial extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	function ambil_data_dari_tabel()
	{
		$this->db->from('barang');
		$data=$this->db->get();
		return $data->result();
	}

	function input_barang($m)
	{
		$data=array(
			'kode_barang' =>$m['kode_barang'],
			'nama_barang' =>$m['nama_barang'],
			'qty' =>$m['qty'],
			'harga' =>$m['harga']);
		$this->db->insert('barang',$data);
	}

	function ambil_id($kode_barang)
	{
		$this->db->from('barang')->where('kode_barang',$kode_barang)->limit(1);
		$c=$this->db->get();
		return $c->row();
	}

	function update_data($kode,$kode_barang)
	{
		$data=array(
			'kode_barang' =>$kode['kode_barang'],
			'nama_barang' =>$kode['nama_barang'],
			'qty' =>$kode['qty'],
			'harga' =>$kode['harga']);
		$this->db->where('kode_barang',$kode_barang);
		$this->db->update('barang',$data);

	}

	function delete_data($kode_barang)
	{
		$this->db->where('kode_barang',$kode_barang);
		$this->db->delete('barang');
		$this->db->last_query();
	}

}

 ?>
