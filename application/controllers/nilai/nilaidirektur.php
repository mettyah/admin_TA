<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilaidirektur extends CI_Controller {
	public function index()
	{
	 	$data['side']='tampil/side/sidedirektur';
	 	$data['content']='tampil/menu_admin_direktur/nilai/nilaitk';
		$data['nilai']=$this->mymodel->selectsiswafornilaitk();
	 	$this->load->view('tampil/utama/main',$data);
	}

	public function nisd()
	{
		$data['side']='tampil/side/sidedirektur';
	 	$data['content']='tampil/menu_admin_direktur/nilai/nilaisd';
		$data['nilai']=$this->mymodel->selectsiswafornilaisd();
	 	$this->load->view('tampil/utama/main',$data);
	}

	public function nismp()
	{
		$data['side']='tampil/side/sidedirektur';
	 	$data['content']='tampil/menu_admin_direktur/nilai/nilaismp';
		$data['nilai']=$this->mymodel->selectsiswafornilaismp();
	 	$this->load->view('tampil/utama/main',$data);
	}

	
}
