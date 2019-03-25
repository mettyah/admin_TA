<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('mymodel');
	}

	public function index()
	{
	 	$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/nilai/nilaitk';
	 	$data['siswa']= $this->db->query("SELECT * FROM siswa"); //tambah where id_jenjang = 1
		$data['nilai']=$this->mymodel->selectsiswafornilaitk();
	 	$this->load->view('tampil/utama/main',$data);
	}

	public function nisd()
	{
		$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/nilai/nilaisd';
		$data['nilai']=$this->mymodel->selectsiswafornilaisd();
	 	$this->load->view('tampil/utama/main',$data);
	}
	
	public function nismp()
	{
		$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/nilai/nilaismp';
		$data['nilai']=$this->mymodel->selectsiswafornilaismp();
	 	$this->load->view('tampil/utama/main',$data);
	}

	// View Detail
	public function detnilaitk()
	{
		$id=$this->uri->segment(4);
		$data['dataupdate1']= $this->db->query("SELECT * FROM siswa WHERE id_siswa='$id'");
		$data['dataupdate2']= $this->db->query("SELECT * FROM nilai_observasi WHERE id_siswa='$id'");
		$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/nilai/nilaiupdate';
	 	$this->load->view('tampil/utama/main',$data);
	}
	public function detnilaisd()
	{
		$id=$this->uri->segment(4);
		$data['dataupdate1']= $this->db->query("SELECT * FROM siswa WHERE id_siswa='$id'");
		$data['dataupdate2']= $this->db->query("SELECT * FROM nilai_psikotes WHERE id_siswa='$id'");
		$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/nilai/nilaiupdatesd';
	 	$this->load->view('tampil/utama/main',$data);
	}
	public function detnilaismp()
	{
		$id=$this->uri->segment(4);
		$data['dataupdate1']= $this->db->query("SELECT * FROM siswa WHERE id_siswa='$id'");
		$data['dataupdate2']= $this->db->query("SELECT * FROM nilai_psikotes WHERE id_siswa='$id'");
		$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/nilai/nilaiupdatesmp';
	 	$this->load->view('tampil/utama/main',$data);
	}

	public function prosesupdatetk(){
		$id['id_siswa']=$this->input->post('id_siswa');
		$datasiswa['nama_siswa']=$this->input->post('nama_siswa');
		$data['nilai_observasi']=$this->input->post('nilai_observasi');
		$this->mymodel->update('nilai_observasi',$data, $id);
		header('location:'.base_url().'nilai/nilai');
	}

	public function prosesupdatesd(){
		$id['id_siswa']=$this->input->post('id_siswa');
		$datasiswa['nama_siswa']=$this->input->post('nama_siswa');
		$data['matematika']=$this->input->post('matematika');
		$data['ipa']=$this->input->post('ipa');
		$data['bahasa_inggris']=$this->input->post('bahasa_inggris');
		$data['bahasa_indonesia']=$this->input->post('bahasa_indonesia');
		$data['psikologi']=$this->input->post('psikologi');
		$data['jumlah_nilai_tes']=$this->input->post('jumlah_nilai_tes');
		$data['rata_rata_nilai_tes']=$this->input->post('rata_rata_nilai_tes');
		$this->mymodel->update('nilai_tes',$data, $id);
		header('location:'.base_url().'nilai/nilai/nisd');
	}

	public function prosesupdatesmp(){
		$id['id_siswa']=$this->input->post('id_siswa');
		$datasiswa['nama_siswa']=$this->input->post('nama_siswa');
		$data['matematika']=$this->input->post('matematika');
		$data['ipa']=$this->input->post('ipa');
		$data['bahasa_inggris']=$this->input->post('bahasa_inggris');
		$data['bahasa_indonesia']=$this->input->post('bahasa_indonesia');
		$data['psikologi']=$this->input->post('psikologi');
		$data['jumlah_nilai_tes']=$this->input->post('jumlah_nilai_tes');
		$data['rata_rata_nilai_tes']=$this->input->post('rata_rata_nilai_tes');
		$this->mymodel->update('nilai_tes',$data, $id);
		header('location:'.base_url().'nilai/nilai/nismp');
	}

	public function delete_nilai(){
		$id=$this->uri->segment(4);
		$deletebyid=array('id_siswa'=>$id);
		$this->mymodel->delete('siswa',$deletebyid);
		header('location:'.base_url().'nilai/nilai');
	}

}
//jgn di buang


	// /public function index(){
	//	$data= array(
	//		'side'=>'tampil/side/side',
	//		'content'=>'tampil/nilai/nilai_v',
	//		'nilai'=>$this->mymodel->selectsiswafornilai());
	//	$this->load->view('tampil/utama/main',$data);
//	}

	//public function nilaisd(){
	//	$data= array(
	//		'side'=>'tampil/side/sidedirektur',
	//		'content'=>'tampil/nilai/nilai_v',
	//		'nilai'=>$this->mymodel->selectsiswafornilai());
	//	$this->load->view('tampil/utama/main',$data);
	//}
	// header('Content-Type: application/json');


//	public function detailnilai($id){
//
//		if(!$this->session->userdata('level') == 'sekretaris1'){
//	    	redirect('login');
//	    }else{
//	      $data= array(
//	  			'side'=>'tampil/side/side',
//	  			'content'=>'tampil/nilai/detail',
//	  			'siswa'=>$this->mymodel->detailnilai($id)->row());
 //		$this->load->view('tampil/utama/main',$data);
	      // echo json_encode($data);
	  //	}
//	}//
//	/public function update(){
		// header('Content-Type: application/json');
//	$id=$this->uri->segment(4);
//	$data= array(
//		'side'=>'tampil/side/side',
//		'content'=>'tampil/nilai/nilaiupdate',
//		'nilai'=>$this->mymodel->selectsiswafornilaiupdate($id));
//	$this->load->view('tampil/utama/main',$data);
	// echo json_encode($data);
//	}
	// $id=$this->uri->segment(4);
		// $data['dataupdate']= $this->db->query("SELECT * FROM admin WHERE ID_ADMIN='$id'");
		// $data['side']= 'tampil/side/side';
		// $data['content']='tampil/petugas/e-datapetugas';
		// $this->load->view('tampil/utama/main',$data);

//	public function fungsiedit(){
		// header('Content-Type: application/json');
//		$id=$this->input->post('id');
		// $where= array('no'=>$id);
//		$where= array('ID_SISWA'=>$id);
		// $data['NOMOR']=$this->input->post('no');
		// $data['NAMA_SISWA']=$this->input->post('nama');
//		$data['matematika']=$this->input->post('matematika');
//		$data['bahasa_inggris']=$this->input->post('bahasa_inggris');
//		$data['IPA ']=$this->input->post('IPA');
//		$data['Bahasa_Indonesia']=$this->input->post('Bahasa_Indonesia');
//		$data['JUMLAH_NILAI_TEST']=$this->input->post('JUMLAH_NILAI_TEST');
//		$data['RATA_RATA_NILAI_TEST']=$this->input->post('RATA_RATA_NILAI_TEST');
//		$this->mymodel->update('siswa',$data,$where);
//		header('location:'.base_url().'nilai/nilai_v');
	// echo json_encode($data);
//	}
//
//	public function tambahdatanilai(){
//	$data['side']= 'tampil/side/side';
//		$data['content']='tampil/nilai/tambahnilai';
//		$this->load->view('tampil/utama/main',$data);
//	}
// public function update_nilai(){
// $id=$this->uri->segment(4);
// $data['dataupdate']= $this->db->query("SELECT * FROM siswa WHERE ID_SISWA='$id'");
// $data['dataupdate']= $this->db->query("SELECT * FROM nilai_tes WHERE ID_SISWA='$id'");
// $data['side']= 'tampil/side/side';
// $data['content']='tampil/nilai/nilaiupdate';
// $this->load->view('tampil/utama/main',$data);
// }

//
//}
