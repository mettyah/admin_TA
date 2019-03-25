<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugasdata extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('mymodel');
    }
	public function index()
	{
		$data['show']=$this->mymodel->petugas1();
		$data['side']='tampil/side/sidesekretaris';
		$data['content']='tampil/petugas/tampilanadmin';
		$this->load->view('tampil/utama/main',$data);
	}

	public function tambahData(){
		$data['side']= 'tampil/side/sidesekretaris';
		$data['content']='tampil/petugas/t-datapetugas';
		$this->load->view('tampil/utama/main',$data);
	}
	
	public function fungsitambahdata(){
		$data['nama_admin']=$this->input->post('nama');
		$data['id_jenis_kelamin']=$this->input->post('jk');
		$data['no_telp_admin']=$this->input->post('tlp');
		$data['id_level']=$this->input->post('sts');
		$data['username_admin']=$this->input->post('username');
		$data['password_admin']=$this->input->post('pass');
		$this->mymodel->insert('admin',$data);
		header('location:'.base_url().'petugas/petugasdata');
	}


	public function deletedata()
	{
		$id=$this->uri->segment(4);
		$deletebyid=array('id_admin'=>$id);
		$this->mymodel->delete('admin',$deletebyid);
		header('location:'.base_url().'petugas/petugasdata');
	}

	public function editData(){
		// header('Content-Type: application/json');
		$id=$this->uri->segment(4);
		$data['dataupdate']= $this->db->query("SELECT * FROM admin WHERE id_admin='$id'");
		$data['side']= 'tampil/side/sidesekretaris';
		$data['content']='tampil/petugas/e-datapetugas';
		$this->load->view('tampil/utama/main',$data);
		// echo json_encode($data['dataupdate']->row());
	}


	public function fungsieditdata(){
		// header('Content-Type: application/json');
		$id=$this->input->post('id');
		// $where= array('no'=>$id);
		$where= array('id_admin'=>$id);
		$data['nama_admin']=$this->input->post('nama');
		$data['id_jenis_kelamin']=$this->input->post('jk');
		$data['no_telp_admin']=$this->input->post('tlp');
		$data['id_level']=$this->input->post('sts');
		$data['username_admin']=$this->input->post('username');
		$data['password_admin']=$this->input->post('pass');
		$this->mymodel->update('admin',$data,$where);
		header('location:'.base_url().'petugas/petugasdata');
	// echo json_encode($data);
	}

}
