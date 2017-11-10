<?php 

class Komentar_Model extends CI_Model
{
	public function gets()
	{
		$query = $this->db->get('komentar');
		return $query->result();
	}
	public function get($iklan_id)
	{
		$this->db->where('iklan_id', $iklan_id);
		$query = $this->db->get('komentar');
		$result = $query->result();
		return (count($result) > 0) ? $result[0] : false ;
	}

	public function join($iklan_id){
		$query = $this->db->query("select * FROM  komentar left join user on komentar.iklan_id = $iklan_id where komentar.user_id = user.user_id AND komentar.iklan_id = $iklan_id order by komentar.komentar_id desc");
		return $query->result();
	}

	public function tambahKomentar($data, $table){
		$this->db->insert($table,$data);
	}

	public function hapusKomen($id,$kolom, $table)
	{
		$this->db->where($kolom, $id);
		$query = $this->db->delete($table);
	}

}