<?php 

class User_Model extends CI_Model
{
	public function gets()
	{
		$query = $this->db->get('user');
		return $query->result();
	}
	public function get($user_id)
	{
		$this->db->where('user_id', $user_id);
		$query = $this->db->get('user');
		$result = $query->result();
		return (count($result) > 0) ? $result[0] : false ;
	}
	public function registrasi($data, $table){
		$this->db->insert($table,$data);
	}
	public function cek_login($where){
		$this->db->where($where);
		$query = $this->db->get('user');
		$result = $query->result();
		return (count($result) > 0) ? $result[0] : false ;
	}

	public function editProfile($data,$user_id,$table){
		$this->db->set($data);
		$this->db->where('user_id',$user_id);
		$this->db->update($table);
	}
}