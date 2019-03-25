<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilaitk extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('mymodel');
	}
	public function index()
	{
		$data['side']='tampil/side/sidetk';
	 	$data['content']='tampil/menu_admin_tk/nilaitk';
		$data['nilai']=$this->mymodel->selectsiswafornilaitk();
	 	$this->load->view('tampil/utama/main',$data);
	}

	public function detnilaitk()
	{
		$id=$this->uri->segment(4);
		$data['dataupdate1']= $this->db->query("SELECT * FROM siswa WHERE id_siswa='$id'");
		$data['dataupdate2']= $this->db->query("SELECT * FROM nilai_tes WHERE id_siswa='$id'");
		$data['side']='tampil/side/sidetk';
	 	$data['content']='tampil/menu_admin_tk/nilaiupdate';
	 	$this->load->view('tampil/utama/main',$data);
	}

	public function tambahNilai(){
		$data['side']= 'tampil/side/sidetk';
		$data['content']='tampil/menu_admin_tk/nilaitambah';
		$this->load->view('tampil/utama/main',$data);
	}

public function prosesupdatetk(){
		$id =$this->input->post('id_siswa');
		$datasiswa =$this->input->post('nama_siswa');
		$data = array(
		'id_siswa' =>$id,
		'nama_siswa' =>$datasiswa
		);
		$update_data = $this->db->update('user', $data);

		$nilai =$this->input->post('nilai_psikotes');
		$data2 = array(
		'nilai_psikotes' =>$nilai, );
		$update_data2 = $this->db->update('nilai_psikotes', $data2);
		
		header('location:'.base_url().'nilai/nilaitk');
	}

	public function proses_insert_nilai(){
		$id =$this->input->post('id_siswa');
		$datasiswa =$this->input->post('nama_siswa');
		$data = array(
		'id_siswa' =>$id,
		'nama_siswa' =>$datasiswa
		);
		$insert_data = $this->db->insert('user', $data);

		$nilai =$this->input->post('nilai_psikotes');
		$data2 = array(
		'nilai_psikotes' =>$nilai, );
		$insert_data2 = $this->db->insert('nilai_psikotes', $data2);
		
		header('location:'.base_url().'nilai/nilaitk');

public function delete_nilai(){
		$id=$this->uri->segment(4);
		$deletebyid=array('id_siswa'=>$id);
		$this->mymodel->delete('siswa',$deletebyid);
		header('location:'.base_url().'nilai/nilaitk');
	}
}
