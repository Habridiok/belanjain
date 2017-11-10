<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardAdmin extends CI_Controller {


	public function __construct()
	{
		parent::__construct();

		$this->load->model('Iklan_Model');
		$this->load->model('User_Model');
		$this->load->model('Pemesanan_Model');

	}

	
	public function index()
	{
		$param = array(
			'title' => "Login - Admin",
			'data_login' => $this->session->userdata('data_login'),
			'data' => $this->User_Model->gets(),
		);

		$this->load->view('loginAdmin', $param);
	}	

		public function dashboard()
	{
		$param = array(
			'title' => "Dashboard - Admin",
			'data' => $this->User_Model->gets(),
			'data_login' => $this->session->userdata('data_login'),
		);
		// var_dump($param);

		$this->load->view('dashboardAdmin', $param);
	}	

	public function dashboardIklan()
	{
		$param = array(
			'title' => "Dashboard - Admin",
			'data' => $this->Iklan_Model->getAll(),
			'data_login' => $this->session->userdata('data_login'),
		);

		$this->load->view('dashboardIklan', $param);
	}

	public function tambahmember(){
		$aram = array(
			'title' => "Tambah Member - Belanja.in",
			'judul'=>"tambah Member",
			'data'=>$this->User_Model->gets(),
			'data_login' => $this->session->userdata('data_login'),
			'edit'=>'no',
			 );
			$this->load->view('daftar',$aram);
	}

	public function c_tambahmember(){

		$config['upload_path']          = './uploads/profil';
		$config['file_name']          = 'foto';
		$config['allowed_types']        = 'jpeg|gif|jpg|png';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
 
		$this->load->library('upload', $config);

		$file_name = "";

		$this->upload->initialize($config);
 
		if ( $this->upload->do_upload('foto_profil')){
		// 	$error = array('error' => $this->upload->display_errors());
		// 	$this->load->view('v_upload', $error);
		// }else{
			$data = $this->upload->data();

			$file_name = $data['file_name'];
			// $data = array('upload_data' => $this->upload->data());
			// $this->load->view('v_upload_sukses', $data);
		}else{
			var_dump($this->upload->display_errors());
		}




		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir').' '.'00:00:00';
		$foto_profil = $file_name;
		$no_hp = $this->input->post('no_hp');
		$email = $this->input->post('email');
		$kapabilitas = $this->input->post('kapabilitas');
		$created_at = $this->input->post('created_at');
		$mdPass = md5($password);		

		$data = array(
			'username'=>$username,
			'password'=>$mdPass,
			'nama' => $nama,
			'tempat_lahir'=>$tempat_lahir,
			'tanggal_lahir'=>$tanggal_lahir,
			'foto_profil'=>$foto_profil,
			'no_hp'=>$no_hp,
			'email'=>$email,
			'kapabilitas'=>$kapabilitas,
			'created_at'=>$created_at,
			);

		var_dump($data);

		$this->User_Model->registrasi($data,'user');


		redirect(base_url('index.php/DashboardAdmin/dashboard'));
		
		
	}


	public function deleteUser($user_id){
		$kolom = 'user_id';
		$table = 'user';
		$this->Iklan_Model->delete($user_id, $kolom, $table);
		redirect('DashboardAdmin/dashboard');
	}
	public function editUser($user_id){
		$aram = array(
			'title' => "Edit Member - Belanja.in",
			'judul'=>"Edit Member",
			'data'=>$this->User_Model->get($user_id),
			'data_login' => $this->session->userdata('data_login'),
			'edit'=>'yes',
			'user_id' => $user_id,
			'tombol' =>'Edit'
			 );
		// var_dump($aram);
			$this->load->view('daftar',$aram);
			

	}

	public function c_editUser($user_id){

		$config['upload_path']          = './uploads/profil';
		$config['file_name']          = 'foto';
		$config['allowed_types']        = 'jpeg|gif|jpg|png';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
 
		$this->load->library('upload', $config);

		$file_name = "";

		$this->upload->initialize($config);
 
		if ( $this->upload->do_upload('foto_profil')){
		// 	$error = array('error' => $this->upload->display_errors());
		// 	$this->load->view('v_upload', $error);
		// }else{
			$data = $this->upload->data();

			$file_name = $data['file_name'];
			// $data = array('upload_data' => $this->upload->data());
			// $this->load->view('v_upload_sukses', $data);
		}else{
			var_dump($this->upload->display_errors());
		}



		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir').' '.'00:00:00';
		$foto_profil = $file_name;
		$no_hp = $this->input->post('no_hp');
		$email = $this->input->post('email');
		$kapabilitas = $this->input->post('kapabilitas');
		$created_at = $this->input->post('created_at');		
		$table = 'user';
		$id=$user_id;

		$data = array(
			'username'=>$username,
			'nama' => $nama,
			'tempat_lahir'=>$tempat_lahir,
			'tanggal_lahir'=>$tanggal_lahir,
			'foto_profil'=>$foto_profil,
			'no_hp'=>$no_hp,
			'email'=>$email,
			'kapabilitas'=>$kapabilitas,
			'created_at'=>$created_at,
			);

		// var_dump($data);

		$this->User_Model->editProfile($data,$id,$table);


		redirect(base_url('index.php/DashboardAdmin/dashboard'));		
	}

	public function editIklan($iklan_id)
	{
		$data_iklan = $this->Iklan_Model->get($iklan_id);
		$data_user = $this->User_Model->get($data_iklan->user_id);
		$param = array(
			'title' => "Belanja.in - Tambah Jualan",
			'subtitle' =>"Tambah Jualan",
			'data' => $data_iklan,
			'data_login' => $this->session->userdata('data_login'),
			'iklan_id' => $iklan_id,
			'edit' => 'yes',
		);
		// var_dump($param);

	 	$this->load->view('header', $param);
		$this->load->view('tambahjualan', $param);
		$this->load->view('footer', $param);
	}

	public function c_editIklan(){
		$judul = $this->input->post('judul');
		$kategori = $this->input->post('kategori');
		$jumlah = $this->input->post('jumlah');
		$harga = $this->input->post('harga');
		$iklan_id = $this->input->post('iklan_id');	

		$data = array(
			'judul'=>$judul,
			'harga'=>$harga,
			'kategori'=>$kategori,
			'jumlah'=>$jumlah,
			);
		// echo $iklan_id;

		// var_dump($data);

		$this->Iklan_Model->editIklan($data,$iklan_id,'iklan');

		redirect(base_url('index.php/DashboardAdmin/dashboardIklan'));	
		
	}


	public function verifikasi($iklan_id){
		$status = 'verifikasi';
		$this->Iklan_Model->setVerifikasi($iklan_id, $status);
		redirect('DashboardAdmin/dashboardiklan');
	}
	public function unverifikasi($iklan_id){
		$status = 'none';
		$this->Iklan_Model->setVerifikasi($iklan_id, $status);
		redirect('DashboardAdmin/dashboardiklan');
	}
	public function deleteIklan($iklan_id){
		$kolom = 'iklan_id';
		$table = 'iklan';
		$this->Iklan_Model->delete($iklan_id,$kolom, $table);
		redirect('DashboardAdmin/dashboardiklan');
	}
}