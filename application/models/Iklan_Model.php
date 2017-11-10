<?php 

class Iklan_Model extends CI_Model
{
	public function getAll()
	{
		$query = $this->db->get('iklan');
		return $query->result();
	}
	public function gets()
	{
		$this->db->where('status_verifikasi','verifikasi');
		$query = $this->db->get('iklan');
		return $query->result();
	}
	public function get($iklan_id)
	{
		$this->db->where('iklan_id', $iklan_id);
		$query = $this->db->get('iklan');
		return $query->result()[0];
	}

		public function getbyuser($user_id)
	{
		$this->db->where('user_id', $user_id);
		$query = $this->db->get('iklan');
		return $query->result();
	}	

	public function getbykategori($kategori)
	{
		$this->db->where('kategori', $kategori);
		$this->db->where('status_verifikasi','verifikasi');
		$query = $this->db->get('iklan');
		return $query->result();
	}

	public function tambahjualan($data, $table){
		$this->db->insert($table,$data);
	}

	public function editIklan($data,$iklan_id,$table){
		$this->db->set($data);
		$this->db->where('iklan_id',$iklan_id);
		$this->db->update($table);
	}

	public function search($search)
	{
		$this->db->where('kategori', $search);
		$this->db->where('status_verifikasi','verifikasi');
		$query = $this->db->get('iklan');
		return $query->result();
	}

	public function setVerifikasi($iklan_id,$status){
		$this->db->set('status_verifikasi',$status);
		$this->db->where('iklan_id',$iklan_id);
		$this->db->update('iklan');
	}

	public function delete($id,$kolom, $table)
	{
		$this->db->where($kolom, $id);
		$query = $this->db->delete($table);
	}


}
