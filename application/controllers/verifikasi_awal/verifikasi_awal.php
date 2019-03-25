<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class verifikasi_awal extends CI_Controller {

	//view tampilan form data awal verivikasi user baru

	 public function pgtk(){
		// $data['pengumuman']=$this->db->query('SELECT * FROM siswa WHERE id_siswa == 1');
		$data['pengumuman']=$this->mymodel->verifikasi_awaltk();
	 	$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/verifikasi_awal/usertk';
	 	$this->load->view('tampil/utama/main',$data);
	}
	 public function pgsd(){
		 $data['pengumuman']=$this->mymodel->verifikasi_awalsd();
	 	$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/verifikasi_awal/usersd';
	 	$this->load->view('tampil/utama/main',$data);
	 }
	 public function pgsmp(){
		 $data['pengumuman']=$this->mymodel->verifikasi_awalsmp();
	 	$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/verifikasi_awal/usersmp';
	 	$this->load->view('tampil/utama/main',$data);
	 }


	 // Update Verifikasi Function
	 public function dttk(){
	 	//update data tk (view)
		$id=$this->uri->segment(4);
		$data['pengumuman']=$this->mymodel->verifikasi_awal($id);
	 	$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/verifikasi_awal/updatetk';
	 	$this->load->view('tampil/utama/main',$data);
	 }
	  public function dtsd(){
	 	//update data sd (view)
		$id=$this->uri->segment(4);
		$data['pengumuman']=$this->mymodel->verifikasi_awal($id);
	 	$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/verifikasi_awal/updatesd';
	 	$this->load->view('tampil/utama/main',$data);
	 }
	  public function dtsmp(){
	 	//update data smp (view)
		$id=$this->uri->segment(4);
		$data['pengumuman']=$this->mymodel->verifikasi_awal($id);
	 	$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/verifikasi_awal/updatesmp';
	 	$this->load->view('tampil/utama/main',$data);
	 }

	 public function proses_update_tk(){
		 //proses update verifikasi pertama atau pendaftaran baru
		$where['id_user']=$this->input->post('id_user');
 		$data['id_pembayaran']=$this->input->post('status');
 		$this->mymodel->update('pendaftaran_baru',$data, $where);
 		header('location:'.base_url().'verifikasi_awal/verifikasi_awal/pgtk');
	 }

	 public function proses_update_sd(){
		 //proses update verifikasi pertama atau pendaftaran baru
		$where['id_user']=$this->input->post('id_user');
 		$data['id_pembayaran']=$this->input->post('status');
 		$this->mymodel->update('pendaftaran_baru',$data, $id);
 		header('location:'.base_url().'verifikasi_awal/verifikasi_awal/pgsd');
	 }

	 public function proses_update_smp(){
		 //proses update verifikasi pertama atau pendaftaran baru
		$where['id_user']=$this->input->post('id_user');
 		$data['id_pembayaran']=$this->input->post('status');
 		$this->mymodel->update('pendaftaran_baru',$data, $id);
 		header('location:'.base_url().'verifikasi_awal/verifikasi_awal/pgsmp');
	 }

	 public function deletedatatk()
 	{
 		$id=$this->uri->segment(4);
 		$deletebyid=array('id_user'=>$id);
 		$this->mymodel->delete('pendaftaran_baru',$deletebyid);
 		header('location:'.base_url().'verifikasi_awal/verifikasi_awal/pgtk');
 	}

	public function deletedatasd()
 {
	 $id=$this->uri->segment(4);
	 $deletebyid=array('id_user'=>$id);
	 $this->mymodel->delete('pendaftaran_baru',$deletebyid);
	 header('location:'.base_url().'verifikasi_awal/verifikasi_awal/pgsd');
 }

 public function deletedatasmp()
{
	$id=$this->uri->segment(4);
	$deletebyid=array('id_user'=>$id);
	$this->mymodel->delete('pendaftaran_baru',$deletebyid);
	header('location:'.base_url().'verifikasi_awal/verifikasi_awal/pgsmp');
}

}
