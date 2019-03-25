<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugasdatadirektur extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('mymodel');
    }
		public function index()
		{
			$data['show']=$this->mymodel->petugas1();
			$data['side']='tampil/side/sidedirektur';
			$data['content']='tampil/menu_admin_direktur/petugas/tampilanadmin';
			$this->load->view('tampil/utama/main',$data);
		}

}
