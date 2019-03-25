<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswasmp extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('mymodel');
	}
	public function index()
	{
		$data['side']='tampil/side/sidesmp';
		$data['content']='tampil/menu_admin_smp/siswasmp';
		$data['siswa']=$this->mymodel->siswasmp1();
		$this->load->view('tampil/utama/main',$data);
	}

	public function deletesiswasmp(){
		$id=$this->uri->segment(4);
		// $data['detail1']= $this->db->query("SELECT * FROM siswa WHERE id_siswa='$id'");
		$deletebyid=array('id_siswa'=>$id);
		$this->mymodel->delete('siswa',$deletebyid);
		header('location:'.base_url().'siswa/siswasmp');
	}

	public function detsiswasmp()
	{
		$id=$this->uri->segment(4);
		$data['detail1']= $this->db->query("SELECT * FROM siswa WHERE id_siswa='$id'");
		$data['detail2']= $this->db->query("SELECT * FROM keluarga WHERE id_siswa='$id'");
		$data['detail3']= $this->db->query("SELECT * FROM saudara_kandung_anak WHERE id_siswa='$id'");
		$data['detail4']= $this->db->query("SELECT * FROM kesehatan_anak WHERE id_siswa='$id'");
		$data['detail5']= $this->db->query("SELECT * FROM ciri_khas_anak WHERE id_siswa='$id'");
		$data['side']='tampil/side/sidesmp';
		$data['content']='tampil/menu_admin_smp/detailsiswasmp';
		$this->load->view('tampil/utama/main',$data);
	}

	public function updatedatasiswa(){
		// header('Content-Type: application/json');
		$id=$this->input->post('id');
		$where= array('id_siswa'=>$id);
		$data['nama_siswa']=$this->input->post('nama_siswa');
		$data['nama_panggilan']=$this->input->post('nama_panggilan');
		$data['tanggal_lahir_siswa']=$this->input->post('tanggal_lahir_siswa');
		$data['usia_siswa']=$this->input->post('usia_siswa');
		$data['id_jenis_kelamin']=$this->input->post('id_jenis_kelamin');
		$data['id_agama']=$this->input->post('id_agama');
		$data['id_warganegara']=$this->input->post('id_warganegara');
		$data['tinggal_bersama_siswa']=$this->input->post('tinggal_bersama_siswa');
		$data['anak_ke_siswa']=$this->input->post('anak_ke_siswa');
		$this->mymodel->update('siswa',$data,$where);
		header('location:'.base_url().'siswa/siswasmp');
	// echo json_encode($data);
	}

	public function updatedatakeluarga(){
		// header('Content-Type: application/json');
		$id=$this->input->post('id');
		$where= array('id_siswa'=>$id);
		$data['nama_ayah']=$this->input->post('nama_ayah');
		$data['nama_ibu']=$this->input->post('nama_ibu');
		$data['id_agama_ayah']=$this->input->post('id_agama_ayah');
		$data['id_agama_ibu']=$this->input->post('id_agama_ibu');
		$data['tanggal_lahir_ayah']=$this->input->post('tanggal_lahir_ayah');
		$data['tanggal_lahir_ibu']=$this->input->post('tanggal_lahir_ibu');
		$data['id_kewarganegaraan_ayah']=$this->input->post('id_kewarganegaraan_ayah');
		$data['id_kewarganegaraan_ibu']=$this->input->post('id_kewarganegaraan_ibu');
		$data['pendidikan_terakhir_ayah']=$this->input->post('pendidikan_terakhir_ayah');
		$data['jurusan_yang_diambil_ayah']=$this->input->post('jurusan_yang_diambil_ayah');
		$data['jurusan_yang_diambil_ibu']=$this->input->post('jurusan_yang_diambil_ibu');
		$data['nama_instansi_ayah_bekerja']=$this->input->post('nama_instansi_ayah_bekerja');
		$data['nama_instansi_ibu_bekerja']=$this->input->post('nama_instansi_ibu_bekerja');
		$data['pangkat_golongan_ayah']=$this->input->post('pangkat_golongan_ayah');
		$data['pangkat_golongan_ibu']=$this->input->post('pangkat_golongan_ibu');
		$data['lama_kerja_ayah_perhari']=$this->input->post('lama_kerja_ayah_perhari');
		$data['lama_kerja_ibu_perhari']=$this->input->post('lama_kerja_ibu_perhari');
		$data['penghasilan_perbulan_ayah']=$this->input->post('penghasilan_perbulan_ayah');
		$data['penghasilan_perbulan_ibu']=$this->input->post('penghasilan_perbulan_ibu');
		$data['jumlah_tanggungan_ayah']=$this->input->post('jumlah_tanggungan_ayah');
		$data['jumlah_tanggungan_ibu']=$this->input->post('jumlah_tanggungan_ibu');
		$data['alamat_rumah_ayah']=$this->input->post('alamat_rumah_ayah');
		$data['alamat_rumah_ibu']=$this->input->post('alamat_rumah_ibu');
		$data['alamat_kantor_ayah']=$this->input->post('alamat_kantor_ayah');
		$data['alamat_kantor_ibu']=$this->input->post('alamat_kantor_ibu');
		$data['telp_rumah_hp_ayah']=$this->input->post('telp_rumah_hp_ayah');
		$data['telp_rumah_hp_ibu']=$this->input->post('telp_rumah_hp_ibu');
		$data['telp_kantor_ayah']=$this->input->post('telp_kantor_ayah');
		$data['telp_kantor_ibu']=$this->input->post('telp_kantor_ibu');
		$data['kesempatan_berkomunikasi_dg_ayah']=$this->input->post('kesempatan_berkomunikasi_dg_ayah');
		$data['kesempatan_berkomunikasi_dg_ibu']=$this->input->post('kesempatan_berkomunikasi_dg_ibu');
		//-------------------------------------------------------------------------------------------------------
		$this->mymodel->update('keluarga',$data,$where);
		header('location:'.base_url().'siswa/siswasmp');
	// echo json_encode($data);
	}

	public function updatedatakandung(){
		$id=$this->input->post('id');
		$where= array('id_siswa'=>$id);
		//-------------------------------------------------------------------------------------------------------
		$data['nama_saudara_kandung']=$this->input->post('nama_saudara_kandung');
		$data['id_jenis_kelamin']=$this->input->post('id_jenis_kelamin_saudara_kandung');
		$data['pendidikan_saudara_kandung']=$this->input->post('pendidikan_saudara_kandung');
		$data['kelas_saudara_kandung']=$this->input->post('kelas_saudara_kandung');
		$data['no_induk_saudara_kandung']=$this->input->post('no_induk_saudara_kandung');
		//-------------------------------------------------------------------------------------------------------
		$this->mymodel->update('saudara_kandung_anak',$data,$where);
		header('location:'.base_url().'siswa/siswasmp');
	}

	public function updatedatariwayatkesehatan(){
		$id=$this->input->post('id');
		$where= array('id_siswa'=>$id);
		//-------------------------------------------------------------------------------------------------------
		$data['berat_badan']=$this->input->post('berat_badan');
		$data['id_golongan_darah']=$this->input->post('id_golongan_darah');
		$data['minum_asi_selama']=$this->input->post('minum_asi_selama');
		$data['perkembangan_dalam_2bulan']=$this->input->post('perkembangan_dalam_2bulan');
		$data['kelainan_dalam_tubuh']=$this->input->post('kelainan_dalam_tubuh');
		$data['makanan_tambahan_kurang_dari_2bulan']=$this->input->post('makanan_tambahan_kurang_dari_2bulan');
		$data['imunisasi_yang_diberikan']=$this->input->post('imunisasi_yang_diberikan');
		$data['alergi_makanan_dan_obat']=$this->input->post('alergi_makanan_dan_obat');
		$data['penglihatan']=$this->input->post('penglihatan');
		$data['pendengaran']=$this->input->post('pendengaran');
		$data['penampilan']=$this->input->post('penampilan');
		//-------------------------------------------------------------------------------------------------------
		$this->mymodel->update('kesehatan_anak',$data,$where);
		header('location:'.base_url().'siswa/siswasmp');
	}

	public function updatedatacirikhasanak(){
		$id=$this->input->post('id');
		$where= array('id_siswa'=>$id);
		//------------------------------------------------------------------------------------------------------
		$data['ciri_fisik_yang_menonjol']=$this->input->post('ciri_fisik_yang_menonjol');
		$data['ciri_kepribadian_yang_menonjol']=$this->input->post('ciri_kepribadian_yang_menonjol');
		$data['bakat_khusus_yang_menonjol']=$this->input->post('bakat_khusus_yang_menonjol');
		$data['prestasi_yang_pernah_diraih']=$this->input->post('prestasi_yang_pernah_diraih');
		//--------------------------------------------------------------------------------------
		$this->mymodel->update('ciri_khas_anak',$data,$where);
		header('location:'.base_url().'siswa/siswasmp');
	}

	public function pgsmp(){
	 $data['pengumuman']=$this->mymodel->pengumumansmp();
	 $data['side']='tampil/side/sidesmp';
	 $data['content']='tampil/menu_admin_smp/usersmp';
	 $this->load->view('tampil/utama/main',$data);
	}
	// Update Verifikasi Function
	public function dtsmp(){
	 //update data tk (view)
	 $id=$this->uri->segment(4);
	 $data['pengumuman']=$this->mymodel->verifikasi_awal($id);
	 $data['side']='tampil/side/sidesmp';
	 $data['content']='tampil/menu_admin_smp/updatesmp';
	 $this->load->view('tampil/utama/main',$data);
	}
	public function proses_update_smp(){
		//proses update verifikasi pertama atau pendaftaran baru
	 $where['id_user']=$this->input->post('id_user');
	 $data['id_pembayaran']=$this->input->post('statusss');
	 $this->mymodel->update('pendaftaran_baru',$data, $where);
	 header('location:'.base_url().'siswa/siswasmp/pgsmp');
	}
	public function deletedatasmp()
	{
	 $id=$this->uri->segment(4);
	 $deletebyid=array('id_user'=>$id);
	 $this->mymodel->delete('pendaftaran_baru',$deletebyid);
	 header('location:'.base_url().'siswa/siswasmp/pgsmp');
	}
}
