<?php 

class Pesan_Model extends CI_Model
{
	public function gets($data)
	{
		$this->db->where($data);
		$query = $this->db->get('pesan');
		return $query->result();
	}
	public function get($iklan_id)
	{
		// $this->db->where('iklan_id', $iklan_id);
		// $query = $this->db->get('pesan');
		// $result = $query->result();
		// return (count($result) > 0) ? $result[0] : false ;
	}

	public function join($user_id){
		$query = $this->db->query("select * FROM  pesan left join user on pesan.reciver_id = $user_id where pesan.sender_id = user.user_id order by pesan.pesan_id desc");
		return $query->result();


		// $query = $this->db->select('t1.nama')->from('user as t1')->where('t1.user_id',$reciver_id)->join('pesan as t2', 't1.user_id = t2.reciver_id','LEFT')->get();
		// return $query->result();
	}

	public function GetJumlahNotifPesan($user_id){
		$query = $this->db->query("select * FROM  pesan left join user on pesan.reciver_id = $user_id where pesan.sender_id = user.user_id AND pesan.reated = 0 order by pesan.pesan_id desc");
		return $query->result();


		// $query = $this->db->select('t1.nama')->from('user as t1')->where('t1.user_id',$reciver_id)->join('pesan as t2', 't1.user_id = t2.reciver_id','LEFT')->get();
		// return $query->result();
	}

	public function getbyuserlogin($user_id){
		$this->db->where('sender_id',$user_id);
		$query = $this->db->get('pesan');
		return $query->result();
	}

	public function tambahPesan($data, $table){
		$this->db->insert($table,$data);
	}

	public function setReated($pesan_id,$status){
		$this->db->set('reated',$status);
		$this->db->where('pesan_id',$pesan_id);
		$this->db->update('pesan');
	}

}