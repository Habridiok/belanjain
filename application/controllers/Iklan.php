<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iklan extends CI_Controller {


	public function __construct()
	{
		parent::__construct();

		$this->load->model('Iklan_Model');
		$this->load->model('User_Model');
		$this->load->model('Komentar_Model');
		$this->load->model('Pemesanan_Model');
		$this->load->model('Pesan_Model');
	}

	public function single($iklan_id)
	{
		$data_iklan = $this->Iklan_Model->get($iklan_id);

		$data_user = $this->User_Model->get($data_iklan->user_id);

		$data_komentar = $this->Komentar_Model->join($iklan_id);

		$data_login = $this->session->userdata('data_login');


		// $data_komentar = $this->Komentar_Model->gets($iklan_id);

		if($data_login['user_id'] == ""){
		$param = array(
			'title' 	=> "Home",
			'data' 		=> $data_iklan,
			'data_user' => $data_user,
			'data_komentar' => $data_komentar,
			'data_login' => $this->session->userdata('data_login'),
			'ada' => 'no',
		);

		$this->load->view('header', $param);
		$this->load->view('single',$param);
		$this->load->view('footer', $param);
		} else {
			$notif = $this->notif($data_login['user_id']);
			// var_dump($notif);
			$panjang = count($notif);
			$ada ="no";
			if ($panjang > 0) {
				$ada = "yes";
			}

			$jumlahPesan = $notif['jumlahPesan'];
			$jumlahPemesanan = $notif['jumlahPemesanan'];

			$param = array(
			'title' 	=> "Home",
			'data' 		=> $data_iklan,
			'data_user' => $data_user,
			'data_komentar' => $data_komentar,
			'data_login' => $this->session->userdata('data_login'),
			'jumlahPesan' => $jumlahPesan,
			'jumlahPemesanan'=> $jumlahPemesanan,
			'ada' => $ada,
		);

		$this->load->view('header', $param);
		$this->load->view('single',$param);
		$this->load->view('footer', $param);

		}
	}

	public function iklanKategori($kategori)
	{
		$data_login = $this->session->userdata('data_login');

		$kategori_iklan = $this->Iklan_Model->getbykategori($kategori);

		if($data_login['user_id'] == ""){
		$param = array(
			'title' 	=> "Home - "."Iklan_Model->kategori",
			'data' 		=> $kategori_iklan,
			'data_login' => $this->session->userdata('data_login'),
			'ada' => 'no',
		);

		$this->load->view('header', $param);
		$this->load->view('kategori',$param);
		$this->load->view('footer', $param);
		}else {
			$notif = $this->notif($data_login['user_id']);
			// var_dump($notif);
			$panjang = count($notif);
			$ada ="no";
			if ($panjang > 0) {
				$ada = "yes";
			}

			$jumlahPesan = $notif['jumlahPesan'];
			$jumlahPemesanan = $notif['jumlahPemesanan'];

			$param = array(
			'title' 	=> "Home - "."Iklan_Model->kategori",
			'data' 		=> $kategori_iklan,
			'jumlahPesan' => $jumlahPesan,
			'jumlahPemesanan'=> $jumlahPemesanan,
			'data_login' => $this->session->userdata('data_login'),
			'ada' => $ada,
		);

		$this->load->view('header', $param);
		$this->load->view('kategori',$param);
		$this->load->view('footer', $param);
		}
	}

	public function search()
	{
		$data_login = $this->session->userdata('data_login');

		$search = $this->input->post('search');
		$search = $this->Iklan_Model->search($search);

		if($data_login['user_id'] == ""){
		$param = array(
			'title' 	=> "Home - "."Iklan_Model->Search",
			'data' 		=> $search,
			'data_login' => $this->session->userdata('data_login'),
			'ada' => 'no',
		);

		$this->load->view('header', $param);
		$this->load->view('kategori',$param);
		$this->load->view('footer', $param);
		}else{
			$notif = $this->notif($data_login['user_id']);
			// var_dump($notif);
			$panjang = count($notif);
			$ada ="no";
			if ($panjang > 0) {
				$ada = "yes";
			}

			$jumlahPesan = $notif['jumlahPesan'];
			$jumlahPemesanan = $notif['jumlahPemesanan'];

			$param = array(
			'title' 	=> "Home - "."Iklan_Model->Search",
			'data' 		=> $search,
			'jumlahPesan' => $jumlahPesan,
			'jumlahPemesanan'=> $jumlahPemesanan,
			'data_login' => $this->session->userdata('data_login'),
			'ada' => $ada,
		);

		$this->load->view('header', $param);
		$this->load->view('kategori',$param);
		$this->load->view('footer', $param);
		}
	}

	public function beli(){
		$iklan_id = $this->input->post('iklan_id');
		$user_id = $this->input->post('user_id');
		$jumlahBeli = $this->input->post('jumlahBeli');
		$jumlahSekarang = $this->input->post('jumlahSekarang');
		$created_at = $this->input->post('created_at');
		$nama = $this->input->post('nama');
		$judul = $this->input->post('judul');

		$jumlahUpdate = $jumlahSekarang - $jumlahBeli;
		// echo $jumlahUpdate;
		if ($jumlahSekarang < 1) {
			redirect('index.php/iklan/single/'.$iklan_id);
		}else{
			$dataJumlah = array('jumlah' => $jumlahUpdate , );
			// var_dump($dataJumlah);
			$this->Iklan_Model->editIklan($dataJumlah,$iklan_id,'iklan');
			$dataPembelian = array(
				'user_id' => $user_id,
				'iklan_id' => $iklan_id ,
				'jumlah_pemesanan'=>$jumlahBeli,
				'created_at' => $created_at, );
			// var_dump($dataPembelian);
			$this->Pemesanan_Model->tambahPesanan($dataPembelian, 'pemesanan');

		// kirim pesan ada yang membeli
		$reciever_id = $this->input->post('reciever_id');
		$sender_id =$user_id;
		$konten ="$nama telah membeli $judul sebanyak $jumlahBeli buah ";

		$data = array(
			'sender_id'=>$sender_id,
			'reciver_id' =>$reciever_id ,			
			'konten'=>$konten, );

		// echo "$reciever_id , $sender_id, $konten";

		$this->Pesan_Model->tambahPesan($data, 'pesan');


			redirect('home/belanjaanku/'.$user_id);
		}

	}

	public function komen(){
		$user_id = $this->input->post('user_id');
		$iklan_id = $this->input->post('iklan_id');
		$konten = $this->input->post('konten');
		$created_at = $this->input->post('created_at');

		$data = array(
			'user_id' =>$user_id , 
			'iklan_id' => $iklan_id,
			'konten' => $konten,
			'created_at' => $created_at,);
		var_dump($data);

		$this->Komentar_Model->tambahKomentar($data,'komentar');
		redirect('iklan/single/'.$iklan_id);
	}

	public function hapusKomen($komentar_id, $iklan_id){
		// echo $komentar_id."  ".$iklan_id;
		$this->Komentar_Model->hapusKomen($komentar_id,'komentar_id','komentar');
		redirect('iklan/single/'.$iklan_id);
	}

	public function notif($user_id){
		$pesan = $this->Pesan_Model->GetJumlahNotifPesan($user_id);
		$jumlahPesan = count($pesan);
		$pesanan = $this->Pemesanan_Model->getbyuserid($user_id);
		$jumlahPemesanan = count($pesanan);

		$data = array(
			'jumlahPesan' => $jumlahPesan,
			'jumlahPemesanan' => $jumlahPemesanan, );
		return $data;
	}

}