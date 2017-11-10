<?php 

class Pemesanan_Model extends CI_Model
{
	public function gets()
	{
		$query = $this->db->get('pemesanan');
		return $query->result();
	}
	public function get($pemesanan_id)
	{
		$this->db->where('kategori', $kategori);
		$query = $this->db->get('iklan');
		return $query->result();
	}
	public function getbyuserid($user_id)
	{
		$this->db->where('user_id', $user_id);
		$query = $this->db->get('pemesanan');
		return $query->result();
	}
	public function getJoin(){

		$this->db->select('*');
		$this->db->from('pesanan');
		$this->db->join('iklan','iklan.iklan_id = pesanan.iklan_id');
		$this->db->where('pesanan.iklan_id',$iklan_id);
		$query = $this->db->get();
		return $query;
	}

	public function tambahPesanan($data, $table){
		$this->db->insert($table,$data);
	}
}