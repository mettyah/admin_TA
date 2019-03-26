<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminsekretaris extends CI_Controller {

public function index(){
		if(!$this->session->userdata('level') == '4'){
			redirect('login');
		}else{
			$data['daftar_baru'] = $this->mymodel->dashboard_daftar_baru();
			$data['daftar_ulang'] = $this->mymodel->dashboard_daftar_ulang();
			$data['lulus']=$this->mymodel->dashboard_daftar_kelulusan("WHERE status='Lulus'")->num_rows();
			$data['belumlulus']=$this->mymodel->dashboard_daftar_kelulusan("WHERE status='Tidak Lulus'")->num_rows();
			$data['tidaklulus']=$this->mymodel->dashboard_daftar_kelulusan("WHERE status='Belum Lulus'")->num_rows();
			$data['side']='tampil/side/sidesekretaris';
			$data['content']='tampil/utama/v_dashboard';
			$this->load->view('tampil/utama/main',$data);
		}
}


}
