<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswasekretaris extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('mymodel');
	}

	public function sistk(){
		$data['side']='tampil/side/sidesekretaris';
		$data['content']='tampil/siswa/siswa_v';
		$data['siswa']=$this->mymodel->siswatk1();
		$this->load->view('tampil/utama/main',$data);
	}

	public function sissd(){
		$data['side']='tampil/side/sidesekretaris';
		$data['content']='tampil/siswa/siswasd';
		$data['siswa']=$this->mymodel->siswasd1();
		$this->load->view('tampil/utama/main',$data);
	}
	public function sissmp(){
		$data['side']='tampil/side/sidesekretaris';
		$data['content']='tampil/siswa/siswasmp';
		$data['siswa']=$this->mymodel->siswasmp1();
		$this->load->view('tampil/utama/main',$data);
	}


	//View Detail Siswa
	public function detsiswatk()
	{
		$id=$this->uri->segment(4);
		$data['detail1']= $this->db->query("SELECT * FROM siswa WHERE id_siswa='$id'");
		$data['detail2']= $this->db->query("SELECT * FROM keluarga WHERE id_siswa='$id'");
		$data['detail3']= $this->db->query("SELECT * FROM saudara_kandung_anak WHERE id_siswa='$id'");
		$data['detail4']= $this->db->query("SELECT * FROM kesehatan_anak WHERE id_siswa='$id'");
		$data['detail5']= $this->db->query("SELECT * FROM ciri_khas_anak WHERE id_siswa='$id'");
		$data['side']='tampil/side/sidetk';
		$data['content']='tampil/menu_admin_tk/detailsiswatk';
		$this->load->view('tampil/utama/main',$data);
	}

	public function detsiswasd()
	{
		$id=$this->uri->segment(4);
		$data['detail1']= $this->db->query("SELECT * FROM siswa WHERE id_siswa='$id'");
		$data['detail2']= $this->db->query("SELECT * FROM keluarga WHERE id_siswa='$id'");
		$data['detail3']= $this->db->query("SELECT * FROM saudara_kandung_anak WHERE id_siswa='$id'");
		$data['detail4']= $this->db->query("SELECT * FROM kesehatan_anak WHERE id_siswa='$id'");
		$data['detail5']= $this->db->query("SELECT * FROM ciri_khas_anak WHERE id_siswa='$id'");
		$data['side']='tampil/side/sidesekretaris';
		$data['content']='tampil/siswa/detailsiswasd';
		$this->load->view('tampil/utama/main',$data);
	}
	public function detsiswasmp()
	{
		$id=$this->uri->segment(4);
		$data['detail1']= $this->db->query("SELECT * FROM siswa WHERE id_siswa='$id'");
		$data['detail2']= $this->db->query("SELECT * FROM keluarga WHERE id_siswa='$id'");
		$data['detail3']= $this->db->query("SELECT * FROM saudara_kandung_anak WHERE id_siswa='$id'");
		$data['detail4']= $this->db->query("SELECT * FROM kesehatan_anak WHERE id_siswa='$id'");
		$data['detail5']= $this->db->query("SELECT * FROM ciri_khas_anak WHERE id_siswa='$id'");
		$data['side']='tampil/side/sidesekretaris';
		$data['content']='tampil/siswa/detailsiswasmp';
		$this->load->view('tampil/utama/main',$data);
	}

	public function deletesiswatk(){
		$id=$this->uri->segment(4);
		// $data['detail1']= $this->db->query("SELECT * FROM siswa WHERE id_siswa='$id'");
		$deletebyid=array('id_siswa'=>$id);
		$this->mymodel->delete('siswa',$deletebyid);
		header('location:'.base_url().'siswa/siswasekretaris/sistk');
	}

	public function deletesiswasd(){
		$id=$this->uri->segment(4);
		// $data['detail1']= $this->db->query("SELECT * FROM siswa WHERE id_siswa='$id'");
		$deletebyid=array('id_siswa'=>$id);
		$this->mymodel->delete('siswa',$deletebyid);
		header('location:'.base_url().'siswa/siswasekretaris/sissd');
	}

	public function deletesiswasmp(){
		$id=$this->uri->segment(4);
		// $data['detail1']= $this->db->query("SELECT * FROM siswa WHERE id_siswa='$id'");
		$deletebyid=array('id_siswa'=>$id);
		$this->mymodel->delete('siswa',$deletebyid);
		header('location:'.base_url().'siswa/siswasekretaris/sissmp');
	}

	// public function detailsiswa($id)
	// {
	// 	//header('Content-Type: application/json');
	// 	if(!$this->session->userdata('level') == 'sekretaris1'){
	//     	redirect('login');
	//     }else{
	//       $data= array(
	//   			'side'=>'tampil/side/sekretaris',
	//   			'content'=>'tampil/detailsiswa',
	//   			'siswa'=>$this->mymodel->detailsiswa($id)->row());
 	// 	$this->load->view('tampil/utama/main',$data);
	//       //echo json_encode($data);
	//   	}
	// }

}
