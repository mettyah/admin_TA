<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Multiuser extends CI_Controller {

	public function index(){
			if($this->session->userdata('level') == '4'){
			redirect('admin/adminsekretaris');
			}elseif ($this->session->userdata('level') == '1') {
			redirect('admin/admintk');
			}elseif ($this->session->userdata('level') == '2') {
			redirect('admin/adminsd');
			}elseif ($this->session->userdata('level') == '3') {
			redirect('admin/adminsmp');
			}elseif ($this->session->userdata('level') == '5') {
			redirect('admin/admindirektur');
			}else {
			redirect('login');
			}
	}

}
