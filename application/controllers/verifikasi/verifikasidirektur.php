<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifikasidirektur extends CI_Controller {
	public function pgtk(){
	 $data['pengumuman']=$this->mymodel->tampilverifikasitk();
	 $data['side']='tampil/side/sidedirektur';
	 $data['content']='tampil/menu_admin_direktur/verifikasi/usertk';
	 $this->load->view('tampil/utama/main',$data);
 }

	public function pgsd(){
		$data['pengumuman']=$this->mymodel->tampilverifikasisd();
	 $data['side']='tampil/side/sidedirektur';
	 $data['content']='tampil/menu_admin_direktur/verifikasi/usersd';
	 $this->load->view('tampil/utama/main',$data);
	}

	public function pgsmp(){
		$data['pengumuman']=$this->mymodel->tampilverifikasismp();
	 $data['side']='tampil/side/sidedirektur';
	 $data['content']='tampil/menu_admin_direktur/verifikasi/usersmp';
	 $this->load->view('tampil/utama/main',$data);
	}
}
