<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifikasi extends CI_Controller {

	//view tampilan form data awal verivikasi user baru

	 public function pgtk(){
		$data['pengumuman']=$this->mymodel->tampilverifikasitk();
	 	$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/verifikasi/usertk';
	 	$this->load->view('tampil/utama/main',$data);
	}

	 public function pgsd(){
		 $data['pengumuman']=$this->mymodel->tampilverifikasisd();
	 	$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/verifikasi/usersd';
	 	$this->load->view('tampil/utama/main',$data);
	 }

	 public function pgsmp(){
		 $data['pengumuman']=$this->mymodel->tampilverifikasismp();
	 	$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/verifikasi/usersmp';
	 	$this->load->view('tampil/utama/main',$data);
	 }


	 // Update Verifikasi Function
	 public function dttk(){
	 	//update data tk (view)
		$id=$this->uri->segment(4);
		$data['pengumuman']=$this->mymodel->verifikasi_ulang($id);
	 	$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/verifikasi/updatetk';
	 	$this->load->view('tampil/utama/main',$data);
	 }
	  public function dtsd(){
	 	//update data sd (view)
		$id=$this->uri->segment(4);
		$data['pengumuman']=$this->mymodel->verifikasi_ulang($id);
	 	$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/verifikasi/updatesd';
	 	$this->load->view('tampil/utama/main',$data);
	 }
	  public function dtsmp(){
	 	//update data smp (view)
		$id=$this->uri->segment(4);
		$data['pengumuman']=$this->mymodel->verifikasi_ulang($id);
	 	$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/verifikasi/updatesmp';
	 	$this->load->view('tampil/utama/main',$data);
	 }

	 public function proses_update_tk(){
		$where['id_user']=$this->input->post('id_user');
 		$data['id_pembayaran']=$this->input->post('status');
 		$this->mymodel->update('pendaftaran_ulang',$data, $id);
 		header('location:'.base_url().'verifikasi/verifikasi/pgtk');
	 }
	 public function proses_update_sd(){
		$where['id_user']=$this->input->post('id_user');
 		$data['id_pembayaran']=$this->input->post('status');
 		$this->mymodel->update('pendaftaran_ulang',$data, $id);
 		header('location:'.base_url().'verifikasi/verifikasi/pgsd');
	 }
	 public function proses_update_smp(){
		 //proses update verifikasi pertama atau pendaftaran baru
		$where['id_user']=$this->input->post('id_user');
 		$data['id_pembayaran']=$this->input->post('status');
 		$this->mymodel->update('pendaftaran_ulang',$data, $where);
 		header('location:'.base_url().'verifikasi/verifikasi/pgsmp');
	 }

	 public function deletedatatk()
 	{
 		$id=$this->uri->segment(4);
 		$deletebyid=array('id_user'=>$id);
 		$this->mymodel->delete('pendaftaran_ulang',$deletebyid);
 		header('location:'.base_url().'verifikasi/verifikasi/pgtk');
 	}

	public function deletedatasd()
 {
	 $id=$this->uri->segment(4);
	 $deletebyid=array('id_user'=>$id);
	 $this->mymodel->delete('pendaftaran_ulang',$deletebyid);
	 header('location:'.base_url().'verifikasi/verifikasi/pgsd');
 }

 public function deletedatasmp()
{
	$id=$this->uri->segment(4);
	$deletebyid=array('id_user'=>$id);
	$this->mymodel->delete('pendaftaran_ulang',$deletebyid);
	header('location:'.base_url().'verifikasi/verifikasi/pgsmp');
}

}
