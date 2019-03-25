<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admindirektur extends CI_Controller {

  public function index(){
  		if(!$this->session->userdata('level') == '5'){
  			redirect('login');
  		}else{
        $data['daftar_baru'] = $this->mymodel->dashboard_daftar_baru();
  			$data['daftar_ulang'] = $this->mymodel->dashboard_daftar_ulang();
  			$data['lulus']=$this->mymodel->dashboard_daftar_kelulusan("WHERE id_status_diterima='1'")->num_rows();
  			$data['belumlulus']=$this->mymodel->dashboard_daftar_kelulusan("WHERE id_status_diterima='3'")->num_rows();
  			$data['tidaklulus']=$this->mymodel->dashboard_daftar_kelulusan("WHERE id_status_diterima='2'")->num_rows();
  			$data['side']='tampil/side/sidedirektur';
  			$data['content']='tampil/utama/v_dashboard';
  			$this->load->view('tampil/utama/main',$data);
  		}
  }
}
