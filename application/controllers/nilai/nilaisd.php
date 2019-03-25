<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilaisd extends CI_Controller {
	public function index()
	{
		$data['side']='tampil/side/sidesd';
	 	$data['content']='tampil/menu_admin_sd/nilaisd';
		$data['nilai']=$this->mymodel->selectsiswafornilaisd();
	 	$this->load->view('tampil/utama/main',$data);
	}

	public function detnilaisd()
	{
		$id=$this->uri->segment(4);
		$data['dataupdate1']= $this->db->query("SELECT * FROM siswa WHERE id_siswa='$id'");
		$data['dataupdate2']= $this->db->query("SELECT * FROM nilai_tes WHERE id_siswa='$id'");
		$data['side']='tampil/side/sidesd';
	 	$data['content']='tampil/menu_admin_sd/nilaiupdate';
	 	$this->load->view('tampil/utama/main',$data);
	}

	public function tambahNilai(){
		$data['side']= 'tampil/side/sidesd';
		$data['content']='tampil/menu_admin_sd/nilaitambah';
		$this->load->view('tampil/utama/main',$data);
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
		$update_data = $this->db->update('nilai_tes', $data);

		$data2['nilai_psikotes']=$this->input->post('nilai_psikotes');
		$update_data2= $this->db->update('nilai_psikotes', $data2);
		
		header('location:'.base_url().'nilai/nilaisd');
	}

	public function proses_insert_nilai(){
		$id['id_siswa']=$this->input->post('id_siswa');
		$datasiswa['nama_siswa']=$this->input->post('nama_siswa');
		$data['matematika']=$this->input->post('matematika');
		$data['ipa']=$this->input->post('ipa');
		$data['bahasa_inggris']=$this->input->post('bahasa_inggris');
		$data['bahasa_indonesia']=$this->input->post('bahasa_indonesia');
		$data['psikologi']=$this->input->post('psikologi');
		$data['jumlah_nilai_tes']=$this->input->post('jumlah_nilai_tes');
		$data['rata_rata_nilai_tes']=$this->input->post('rata_rata_nilai_tes');
		$insert_data = $this->db->insert('nilai_tes', $data);

		$data2['nilai_psikotes']=$this->input->post('nilai_psikotes');
		$insert_data2= $this->db->insert('nilai_psikotes', $data2);
		
		header('location:'.base_url().'nilai/nilaisd');
	}

public function delete_nilai(){
		$id=$this->uri->segment(4);
		$deletebyid=array('id_siswa'=>$id);
		$this->mymodel->delete('siswa',$deletebyid);
		header('location:'.base_url().'nilai/nilaisd');
	}
}
