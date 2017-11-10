<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct()
	{
		parent::__construct();

		$this->load->model('Iklan_Model');
		$this->load->model('User_Model');
		$this->load->model('Pemesanan_Model');
		$this->load->model('Pesan_Model');

	}

	public function index()
	{	
		$data_login = $this->session->userdata('data_login');

		if($data_login['user_id'] == ""){
			$ada ="no";
			$param = array(
			'title' => "Home",
			'data_login' => $data_login,
			'data' => $this->Iklan_Model->gets(),
			// 'jumlahPesan' => $jumlahPesan,
			// 'jumlahPemesanan'=> $jumlahPemesanan,
			'ada' => $ada,
		);
		// var_dump($param);

		$this->load->view('header', $param);
		$this->load->view('home', $param);
		$this->load->view('footer', $param);

		} else{
			$notif = $this->notif($data_login['user_id']);
			// var_dump($notif);
			$panjang = count($notif);
			$ada ="no";
			if ($panjang > 0) {
				$ada = "yes";
			}

			$jumlahPesan = $notif['jumlahPesan'];
			$jumlahPemesanan = $notif['jumlahPemesanan'];

			// echo $jumlahPesan;
			// echo $jumlahPemesanan;

			$param = array(
				'title' => "Home",
				'data_login' => $data_login,
				'data' => $this->Iklan_Model->gets(),
				'jumlahPesan' => $jumlahPesan,
				'jumlahPemesanan'=> $jumlahPemesanan,
				'ada' => $ada,
			);
			// var_dump($param);

		$this->load->view('header', $param);
		$this->load->view('home', $param);
		$this->load->view('footer', $param);
			
		}
		
	}

	public function v_daftar(){
		$aram = array(
			'title' => "Daftar - Belanja.in",
			'judul'=>"Daftar Sekarang",
			'tombol' =>"Daftar",
			'data_login' => $this->session->userdata('data_login'),
			'data'=>$this->User_Model->gets(),
			'edit'=>'no',
			'tombol'=>'Daftar'
		);
		$this->load->view('daftar',$aram);
	}

	public function admin(){
		$aram = array(
			'title' => "Login - Adm.in",
			'data'=>$this->User_Model->gets(),
			'data_login' => $this->session->userdata('data_login'), );
		$this->load->view('loginAdmin', $aram);
	}

	public function c_registrasi(){
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir').' '.'00:00:00';
		$foto_profil = "default";
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

		$this->User_Model->registrasi($data,'user');

		if ($kapabilitas=='user'){
			redirect(base_url('index.php/'));
		} else{
			redirect(base_url('index.php/'));
		}
		
	}

	public function logins(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$kapabilitas = $this->input->post('kapabilitas');
			$where = array(
				'username' 		=> $username,
				'password' 		=> md5($password),
				'kapabilitas' 	=> $kapabilitas,
			);

			$data_cek = $this->User_Model->cek_login($where);

			if($data_cek){
				$data_session = array(
					'username' => $username,
					'user_id' => $data_cek->user_id,
					'nama' => $data_cek->nama,
					'tempat_lahir'=>$data_cek->tempat_lahir,
					'tanggal_lahir'=>$data_cek->tanggal_lahir,
					'foto_profil' =>$data_cek->foto_profil,
					'no_hp'=>$data_cek->no_hp,
					'email' => $data_cek->email,
					'created_at' =>$data_cek->created_at,

					'status' => "login",
				);

				// var_dump($data_session);
	 		
				$this->session->set_userdata('data_login', $data_session);

				if ($kapabilitas == 'user'){
					redirect(base_url('index.php/Home/index'));
				} else if ($kapabilitas=='admin'){
					redirect(base_url('index.php/DashboardAdmin/dashboard'));
				} 
				}else{
				echo "Username dan password salah !";
				}
	 }

	 public function profile($user_id){
		$data_login = $this->session->userdata('data_login');


	 	$iklan = $this->Iklan_Model->getbyuser($user_id);
	 	$jumlah_iklan = count($iklan);
	 	// echo $jumlah_iklan;
	 	if($data_login['user_id'] == ""){
	 	$param = array(
			'title' => "Belanja.in - Profile",
			'subtitle' =>"Profile User",
			'data' => $this->User_Model->get($user_id),
			'data_login' => $this->session->userdata('data_login'),
			'activeprofile'=>"active",
			'jumlah_iklan'=>$jumlah_iklan,
			'ada' => 'no',
		);
 
	 	$this->load->view('header', $param);
	 	$this->load->view('subHeaderProfil',$param);
		$this->load->view('profile', $param);
		$this->load->view('footer', $param);
		} else{
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
			'title' => "Belanja.in - Profile",
			'subtitle' =>"Profile User",
			'data' => $this->User_Model->get($user_id),
			'data_login' => $this->session->userdata('data_login'),
			'activeprofile'=>"active",
			'jumlahPesan' => $jumlahPesan,
			'jumlahPemesanan'=> $jumlahPemesanan,
			'jumlah_iklan'=>$jumlah_iklan,
			'ada' => $ada,
		);
 
	 	$this->load->view('header', $param);
	 	$this->load->view('subHeaderProfil',$param);
		$this->load->view('profile', $param);
		$this->load->view('footer', $param);
		}
	}

	public function editProfile($user_id){
		if (!$this->session->userdata('data_login')) {
			show_404();
		}
		$data_login = $this->session->userdata('data_login');
		
		if($data_login['user_id'] == ""){
	 	$param = array(
			'title' => "Belanja.in - Edit Profil",
			'subtitle' =>"Edit Profile",
			'data' => $this->User_Model->get($user_id),
			'data_login' => $this->session->userdata('data_login'),
			'activeeditProfile'=>"active",
			'ada' => 'no',
		);

	 
	 	$this->load->view('header', $param);
	 	$this->load->view('subHeaderProfil',$param);
		$this->load->view('editProfile', $param);
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
			'title' => "Belanja.in - Edit Profil",
			'subtitle' =>"Edit Profile",
			'data' => $this->User_Model->get($user_id),
			'data_login' => $this->session->userdata('data_login'),
			'activeeditProfile'=>"active",
			'jumlahPesan' => $jumlahPesan,
			'jumlahPemesanan'=> $jumlahPemesanan,
			'ada' => $ada,
		);

	 
	 	$this->load->view('header', $param);
	 	$this->load->view('subHeaderProfil',$param);
		$this->load->view('editProfile', $param);
		$this->load->view('footer', $param);
		}
	}

	public function c_editProfile(){
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

		// var_dump($file_name);


		$user_id = $this->input->post('user_id');
		$nama = $this->input->post('nama');
		// $foto_iklan = $this->input->post('foto_iklan');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$password = $this->input->post('password');
		$table='user';
		
		$data = array(
			'user_id'=>$user_id,
			'nama'=>$nama,
			'tanggal_lahir'=>$tanggal_lahir,
			'foto_profil'=>$file_name,
			'email'=>$email,
			'no_hp'=>$no_hp,
			'password'=>md5($password),
			);



		$this->User_Model->editProfile($data,$user_id,$table);
		redirect(base_url('index.php/home/profile/'.$user_id));

	}

	public function belanjaanku($user_id)
	{
		$data_login = $this->session->userdata('data_login');
		$data_pemesanan = $this->Pemesanan_Model->getbyuserid($user_id);
		$batas = sizeof($data_pemesanan);

		for ($i=0; $i < $batas; $i++) { 
			$iklan_id[$i] = $data_pemesanan[$i]->iklan_id;
		}
		// var_dump($iklan_id);
		// var_dump($data_pemesanan);
		
		// $id = $data_pemesanan[0]->iklan_id;
		// // echo "id = ".$id;
		for ($i=0; $i < $batas; $i++) { 
			$data_iklan[$i] = $this->Iklan_Model->get($iklan_id[$i]);
		}

		// $data_iklan = $this->Iklan_Model->get($iklan_id);
		// echo var_dump($data_iklan);
		if($data_login['user_id'] == ""){
		$param = array(
			'title' => "Belanja.in - Belanjaanku",
			'subtitle' =>"Belanjaanku",
			'data' => $data_pemesanan,
			'data_iklan' => $data_iklan,
			'data_login' => $this->session->userdata('data_login'),
			'batas' => $batas,
			'activebelanjaanku'=>"active",
			'ada' => 'no',
		);
		// var_dump($param);
	 	$this->load->view('header', $param);
	 	$this->load->view('subHeaderProfil',$param);
		$this->load->view('belanjaanku', $param);
		$this->load->view('footer', $param);
		} else{
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
			'title' => "Belanja.in - Belanjaanku",
			'subtitle' =>"Belanjaanku",
			'data' => $data_pemesanan,
			'data_iklan' => $data_iklan,
			'data_login' => $data_login,
			'batas' => $batas,
			'activebelanjaanku'=>"active",
			'jumlahPesan' => $jumlahPesan,
			'jumlahPemesanan'=> $jumlahPemesanan,
			'ada' => $ada,
		);
		// var_dump($param);
	 	$this->load->view('header', $param);
	 	$this->load->view('subHeaderProfil',$param);
		$this->load->view('belanjaanku', $param);
		$this->load->view('footer', $param);
		}
	}

	public function jualanku($user_id)
	{
		$data_login = $this->session->userdata('data_login');

		if($data_login['user_id'] == ""){
		$param = array(
			'title' => "Belanja.in - Jualanku",
			'subtitle' =>"Jualanku",
			'data' => $this->User_Model->get($user_id),
			'databelanjaan' => $this->Iklan_Model->getbyuser($user_id),
			'data_login' => $this->session->userdata('data_login'),
			'activejualanku'=>"active",
			'ada' => 'no',
		);

	 	$this->load->view('header', $param);
	 	$this->load->view('subHeaderProfil',$param);
		$this->load->view('jualanku', $param);
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
			'title' => "Belanja.in - Jualanku",
			'subtitle' =>"Jualanku",
			'data' => $this->User_Model->get($user_id),
			'databelanjaan' => $this->Iklan_Model->getbyuser($user_id),
			'data_login' => $this->session->userdata('data_login'),
			'activejualanku'=>"active",
			'jumlahPesan' => $jumlahPesan,
			'jumlahPemesanan'=> $jumlahPemesanan,
			'ada' => $ada,
		);

	 	$this->load->view('header', $param);
	 	$this->load->view('subHeaderProfil',$param);
		$this->load->view('jualanku', $param);
		$this->load->view('footer', $param);
		}
	}

	public function tambahjualan($user_id)
	{
		$param = array(
			'title' => "Belanja.in - Tambah Jualan",
			'subtitle' =>"Tambah Jualan",
			'data' => $this->User_Model->get($user_id),
			'databelanjaan' => $this->Iklan_Model->getbyuser($user_id),
			'data_login' => $this->session->userdata('data_login'),
			'edit' => 'no',
		);
		// var_dump($param);

	 	$this->load->view('header', $param);
	 	$this->load->view('subHeaderProfil',$param);
		$this->load->view('tambahjualan', $param);
		$this->load->view('footer', $param);
	}

	public function c_tambahjualan(){
		$config['upload_path']          = './uploads/iklan';
		$config['file_name']          = 'foto';
		$config['allowed_types']        = 'jpeg|gif|jpg|png';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
 
		$this->load->library('upload', $config);

		$file_name = "";

		$this->upload->initialize($config);
 
		if ( $this->upload->do_upload('foto_iklan')){
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

		// var_dump($file_name);


		$user_id = $this->input->post('user_id');
		$judul = $this->input->post('judul');
		// $foto_iklan = $this->input->post('foto_iklan');
		$harga = $this->input->post('harga');
		$kategori = "kategori";
		$deskripsi = $this->input->post('deskripsi');
		$jumlah = $this->input->post('jumlah');
		$status_verifikasi = $this->input->post('status_verifikasi');
		$created_at = $this->input->post('created_at');		

		$data = array(
			'user_id'=>$user_id,
			'judul'=>$judul,
			'foto_iklan'=>$file_name,
			'harga'=>$harga,
			'kategori'=>$kategori,
			'deskripsi'=>$deskripsi,
			'jumlah'=>$jumlah,
			'status_verifikasi'=>$status_verifikasi,
			'created_at'=>$created_at,
			);

		// var_dump($data);

		$this->Iklan_Model->tambahjualan($data,'iklan');

		$param = array(
			'title' => "Home",
			'subtitle' =>"Jualanku",
			'data' => $this->User_Model->get($user_id),
			'databelanjaan' => $this->Iklan_Model->getbyuser($user_id),
			'data_login' => $this->session->userdata('data_login'),
		);

	 	$this->load->view('header', $param);
	 	$this->load->view('subHeaderProfil',$param);
		$this->load->view('jualanku', $param);
		$this->load->view('footer', $param);
		
	}


	public function v_pesan($user_id){

		$pesan = $this->Pesan_Model->join($user_id);
		
		$data_login = $this->session->userdata('data_login');

		if($data_login['user_id'] == ""){
		// var_dump($pesan);
		// $panjang = count($pesan);
		// echo $panjang;

		// if ($panjang == 0){
		// 	$param = array(
		// 		'title' => 'Kotak Masuk',
		// 		'subtitle' => 'Kotak Masuk',
		// 		'data' => 'Belum ada pesan masuk untuk anda',
		// 		'data_login' => $this->session->userdata('data_login'),
		// 		 );
		// 		$this->load->view('header', $param);
		// 	 	$this->load->view('subHeaderProfil',$param);
		// 		$this->load->view('listpesan1', $param);
		// 		$this->load->view('footer', $param);
		// } elseif ($panjang > 0) {
		// 	$i=0; 
		// 	foreach ($pesan as $ps) {
		// 		$user[$i] =  $this->Pesan_Model->join($ps->sender_id);
		// 		$i++;
		// 	}
			
		// 	echo"AAAAAA";
		// 	var_dump($user);

			$param = array(
				'judul' => 'Kotak Masuk',
				'subtitle' => 'Kotak Masuk',
				'data' => $pesan,
				'data_login' => $this->session->userdata('data_login'),
				'ada' => 'no',
				 );
				$this->load->view('header', $param);
			 	$this->load->view('subHeaderProfil',$param);
				$this->load->view('pesan', $param);
				$this->load->view('footer', $param);
		} else{
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
				'judul' => 'Kotak Masuk',
				'subtitle' => 'Kotak Masuk',
				'data' => $pesan,
				'data_login' => $this->session->userdata('data_login'),
				'jumlahPesan' => $jumlahPesan,
				'jumlahPemesanan'=> $jumlahPemesanan,
				'ada' => $ada,
				 );
				$this->load->view('header', $param);
			 	$this->load->view('subHeaderProfil',$param);
				$this->load->view('pesan', $param);
				$this->load->view('footer', $param);

			}

		// $param = array(
		// 	'judul' => "Belanja.in - Pesan Masuk" ,
		// 	'subtitle' =>"Pesan Dari : ",
		// 	'konten' => $this->Pesan_Model->get($data),
		// 	'pengirim' => $this->User_Model->get($sender_id),
		// 	'data_login' => $this->session->userdata('data_login'),
		// 	 );
		// var_dump($param);

		// $this->load->view('header', $param);
	 // 	$this->load->view('subHeaderProfil',$param);
		// $this->load->view('pesan', $param);
		// $this->load->view('footer', $param);
	}

	public function v_boxpesan($reciever_id , $pesan_id){

		$reciever = $this->User_Model->get($reciever_id);
		$data_login = $this->session->userdata('data_login');

		// var_dump($reciever);
		// echo "AAAAAAAAA";

		// echo $pesan_id;

		$this->Pesan_Model->setReated($pesan_id,1);
		if($data_login['user_id'] == ""){
		$param = array(
			'judul' => "Belanja.in - Tulis Pesan" ,
			'subtitle' =>"Kirim Pesan",
			'data' => $reciever,
			'data_login' => $this->session->userdata('data_login'),
			'ada'=>'no',
			 );
		// var_dump($param);

		$this->load->view('header', $param);
	 	$this->load->view('subHeaderProfil',$param);
		$this->load->view('tulispesan', $param);
		$this->load->view('footer', $param);
		} else{
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
			'judul' => "Belanja.in - Tulis Pesan" ,
			'subtitle' =>"Kirim Pesan",
			'data' => $reciever,
			'jumlahPesan' => $jumlahPesan,
			'jumlahPemesanan'=> $jumlahPemesanan,
			'data_login' => $this->session->userdata('data_login'),
			'ada'=>$ada,
			 );
		// var_dump($param);

		$this->load->view('header', $param);
	 	$this->load->view('subHeaderProfil',$param);
		$this->load->view('tulispesan', $param);
		$this->load->view('footer', $param);
		}
	}

	public function v_boxpesan2($reciever_id){
		$data_login = $this->session->userdata('data_login');
		$reciever = $this->User_Model->get($reciever_id);

		if($data_login['user_id'] == ""){
		$param = array(
			'judul' => "Belanja.in - Tulis Pesan" ,
			'subtitle' =>"Kirim Pesan",
			'data' => $reciever,
			'data_login' => $this->session->userdata('data_login'),
			'ada' => 'no',
			 );
		// var_dump($param);

		$this->load->view('header', $param);
	 	$this->load->view('subHeaderProfil',$param);
		$this->load->view('tulispesan', $param);
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
			'judul' => "Belanja.in - Tulis Pesan" ,
			'subtitle' =>"Kirim Pesan",
			'data' => $reciever,
			'jumlahPesan' => $jumlahPesan,
			'jumlahPemesanan'=> $jumlahPemesanan,
			'data_login' => $this->session->userdata('data_login'),
			'ada' => $ada,
			 );
		// var_dump($param);

		$this->load->view('header', $param);
	 	$this->load->view('subHeaderProfil',$param);
		$this->load->view('tulispesan', $param);
		$this->load->view('footer', $param);
		}

	}

	public function c_boxpesan(){

		$reciever_id = $this->input->post('reciever_id');
		$sender_id =$this->input->post('sender_id');
		$konten =$this->input->post('konten');

		$data = array(
			'sender_id'=>$sender_id,
			'reciver_id' =>$reciever_id ,			
			'konten'=>$konten, );

		// echo "$reciever_id , $sender_id, $konten";

		$this->Pesan_Model->tambahPesan($data, 'pesan');
		redirect(base_url('index.php/home/v_pesan/'.$sender_id));
	}	

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/home'));
	}
	public function logoutadmin(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/home/admin'));
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