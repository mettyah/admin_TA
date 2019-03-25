<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumumandirektur extends CI_Controller {
	public function pgtk(){
	 $data['pengumuman']=$this->mymodel->pengumumantk();
	 $data['side']='tampil/side/sidedirektur';
	 $data['content']='tampil/menu_admin_direktur/pengumuman/usertk';
	 $this->load->view('tampil/utama/main',$data);
 }
	public function pgsd(){
		$data['pengumuman']=$this->mymodel->pengumumansd();
	 $data['side']='tampil/side/sidedirektur';
	 $data['content']='tampil/menu_admin_direktur/pengumuman/usersd';
	 $this->load->view('tampil/utama/main',$data);
	}
	public function pgsmp(){
		$data['pengumuman']=$this->mymodel->pengumumansmp();
	 $data['side']='tampil/side/sidedirektur';
	 $data['content']='tampil/menu_admin_direktur/pengumuman/usersmp';
	 $this->load->view('tampil/utama/main',$data);
	}


	// Update Verifikasi Function
	public function dttk(){
	 //update data tk (view)
	 $id=$this->uri->segment(4);
	 $data['pengumuman']=$this->mymodel->verifikasi_awal($id);
	 $data['side']='tampil/side/sidedirektur';
	 $data['content']='tampil/menu_admin_direktur/pengumuman/updatetk';
	 $this->load->view('tampil/utama/main',$data);
	}
	 public function dtsd(){
	 //update data sd (view)
	 $id=$this->uri->segment(4);
	 $data['pengumuman']=$this->mymodel->verifikasi_awal($id);
	 $data['side']='tampil/side/sidedirektur';
	 $data['content']='tampil/menu_admin_direktur/pengumuman/updatesd';
	 $this->load->view('tampil/utama/main',$data);
	}
	 public function dtsmp(){
	 //update data smp (view)
	 $id=$this->uri->segment(4);
	 $data['pengumuman']=$this->mymodel->verifikasi_awal($id);
	 $data['side']='tampil/side/sidedirektur';
	 $data['content']='tampil/menu_admin_direktur/pengumuman/updatesmp';
	 $this->load->view('tampil/utama/main',$data);
	}

	public function proses_update_tk(){
		//proses update verifikasi pertama atau pendaftaran baru
	 $where['id_user']=$this->input->post('id_user');
	 $data['id_pembayaran']=$this->input->post('statusss');
	 $this->mymodel->update('pendaftaran_baru',$data, $where);
	 header('location:'.base_url().'pengumuman/pengumumandirektur/pgtk');
	}

	public function proses_update_sd(){
		//proses update verifikasi pertama atau pendaftaran baru
	 $where['id_user']=$this->input->post('id_user');
	 $data['id_pembayaran']=$this->input->post('status');
	 $this->mymodel->update('pendaftaran_baru',$data, $id);
	 header('location:'.base_url().'pengumuman/pengumumandirektur/pgsd');
	}

	public function proses_update_smp(){
		//proses update verifikasi pertama atau pendaftaran baru
	 $where['id_user']=$this->input->post('id_user');
	 $data['id_pembayaran']=$this->input->post('status');
	 $this->mymodel->update('pendaftaran_baru',$data, $id);
	 header('location:'.base_url().'pengumuman/pengumumandirektur/pgsmp');
	}

	public function deletedatatk()
 {
	 $id=$this->uri->segment(4);
	 $deletebyid=array('id_user'=>$id);
	 $this->mymodel->delete('pendaftaran_baru',$deletebyid);
	 header('location:'.base_url().'pengumuman/pengumumandirektur/pgtk');
 }

 public function deletedatasd()
{
	$id=$this->uri->segment(4);
	$deletebyid=array('id_user'=>$id);
	$this->mymodel->delete('pendaftaran_baru',$deletebyid);
	header('location:'.base_url().'pengumuman/pengumumandirektur/pgsd');
}

public function deletedatasmp()
{
 $id=$this->uri->segment(4);
 $deletebyid=array('id_user'=>$id);
 $this->mymodel->delete('pendaftaran_baru',$deletebyid);
 header('location:'.base_url().'pengumuman/pengumumandirektur/pgsmp');
}
}
