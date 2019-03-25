<?php
// use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class user extends REST_Controller{
  function __construct()
  {
	  parent::__construct();
	  $this->load->model('androidmodel');
  }
  function index_post(){
  	$api=$this->post('api');
  	if ($api=="login") {
  		$username=$_POST["username"];
  		$password=$_POST["password"];
  		$where=array('nama_user'=>$username, 'password_user'=>$password);
  		$cek_fase_1=$this->androidmodel->selectwhere('user',$where)->num_rows();
  		$cek_fase_2=$this->androidmodel->selectwhere('user',$where)->row();
  		if ($cek_fase_1 > 0) {
  			$data_session=array(
  				'id_user'=>$cek_fase_2->id_user,
  				'nama_user'=>$cek_fase_2->nama_user,
  				'email_user'=>$cek_fase_2->email_user,
  				'jenjang'=>$cek_fase_2->id_jenjang,);
  			$message=array('succes'=>1, "data_user"=>$data_session);
  			$this->response($message, 200);
  		}
  		else{
  			$message=array('succes'=>2);
  			$this->response($message, 200);
  		}
  	}
  	else if ($api=="register") {
  	$email = $_POST["email"];
  	// $no_telp = $_POST["no_telp"];
  	$username = $_POST["username"];
  	$password=$_POST["password"];
  	$jenjang=$_POST["jenjang"];
  	$where = array("email_user"=>$email);
  	$data = array('ID_USER'=>"",
  		'EMAIL_USER' =>$email ,
  	// 'NO_TELP'=>$no_telp,
  	'NAMA_USER'=>$username,
  	'PASSWORD_USER'=>$password,
  	'ID_JENJANG'=>$jenjang);
  	$cek_fase_1 = $this->androidmodel->selectwhere('user',$where)->num_rows();
  	if ($cek_fase_1 > 0) {
  		$message=array('succes'=>2);
		$this->response($message, 200);
  	}else{
  		$this->androidmodel->insert('user',$data);
  		$message=array('succes'=>1);
		$this->response($message, 200);
  	}
  }
}
}
?>
