<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
  $this->load->view('login_form.php');
	}

public function ceklogin(){
  // $username = $this->input->post('username', true);
  // $password = $this->input->post('password', true);
  // $cek = $this->mymodel->ceklogin($email, $password);
  // $tes = count($cek);
  // if($tes>0){
  //   $data_login = $this->mymodel->ceklogin($username, $password);
  //   $level = $data_login->level;
  //   $data = array('level' => $level);
  //   $this->session->set_userdata($data);
  //   if($level == '4') {
  //     redirect('admin/adminsekretaris');
  // 	}elseif ($level == '1') {
  //   	redirect('admin/admintk');
  // 	}elseif ($level == '2') {
  //   	redirect('admin/adminsd');
  // 	}elseif ($level == '3') {
  //   	redirect('admin/adminsmp');
  // 	}elseif ($level == '5') {
  //   	redirect('admin/admindirektur');
  // 	}
  // }else{
	// 	redirect('login');
	// }

	$username = $this->input->post('username', true);
	$password = $this->input->post('password', true);
	$cek = $this->mymodel->ceklogin($username, $password);
	  $level = $cek->id_level;
		$data['level'] = $level;
	  $this->session->set_userdata($data);
	  if($level == '4') {
	    redirect('admin/adminsekretaris');
		}elseif ($level == '1') {
	  	redirect('admin/admintk');
		}elseif ($level == '2') {
	  	redirect('admin/adminsd');
		}elseif ($level == '3') {
	  	redirect('admin/adminsmp');
		}elseif ($level == '5') {
	  	redirect('admin/admindirektur');
		}
}

 function logout(){
    $this->session->sess_destroy();
    redirect('login');
  }
}
