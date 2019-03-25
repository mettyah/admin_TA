<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class insert extends REST_Controller{
  function __construct()
  {
	  parent::__construct();
	  $this->load->model('androidmodel');
  }
  function index_post(){
  	$api=$this->post('api');
  	if ($api=="datasiswa") {
  	$namalengkap = $_POST["nl"];
  	$namapanggilan = $_POST["np"];
  	$tanggallahir = $_POST["tl"];
  	$usia=$_POST["usia"];
  	$jeniskelamin=$_POST["jk"];
    $agama=$_POST["agama"];
    $kwn=$_POST["kewarga"];
    $tinggalbersama=$_POST["tglbr"];
    $anakke=$_POST["ake"];
    $iduser = $_POST["id_user"];
  	$where = array("id_user"=>$iduser);
  	$data = array('id_siswa'=>$iduser,
  		'nama_siswa' =>$namalengkap ,
  	'nama_panggilan'=>$namapanggilan,
  	'tanggal_lahir_siswa'=>$tanggallahir,
  	'usia_siswa'=>$usia,
  	'tinggal_bersama_siswa'=>$tinggalbersama,
    'anak_ke_siswa'=>$anakke,
    'id_jenis_kelamin'=>$jeniskelamin,
    'id_agama'=>$agama,
    'id_warganegara'=>$kwn,
    'id_status_diterima'=>"3",
    'id_user'=>$iduser);
  	$cek_fase_1 = $this->androidmodel->selectwhere('siswa',$where)->num_rows();
    	$cek_fase_2=$this->androidmodel->selectwhere('siswa',$where)->row();
  	if ($cek_fase_1 > 0) {
      $data_session=array(
        'id_siswa'=>$cek_fase_2->id_siswa);
  		$message=array('succes'=>2, "data_siswa"=>$data_session);
		$this->response($message, 200);
  	}else{
  		$this->androidmodel->insert('siswa',$data);
  		$message=array('succes'=>1);
		$this->response($message, 200);
  	}
  }
  else if ($api=="riwayat_sklh") {
  $nmsekolah = $_POST["nm_sekolah"];
  $thn_masuk = $_POST["thn_masuk"];
  $thn_tamat = $_POST["thn_tamat"];
  $almt_sekolah=$_POST["almt_sekolah"];
  $ksulitan =$_POST["ksulitan"];
  $aktifitas=$_POST["aktifitas"];
  $id_siswa = $_POST["id_siswa"];

  $data = array('id_riwayat_sekolah'=>"",
    'nama_sekolah' =>$nmsekolah ,
  'tahun_masuk'=>$thn_masuk,
  'tahun_lulus'=>$thn_tamat,
  'alamat_sekolah'=>$almt_sekolah,
  'kesulitan_saat_sekolah'=>$ksulitan,
  'aktifitas_yang_disukai'=>$aktifitas,
  'id_siswa'=>$id_siswa);
  $where = array("id_siswa"=>$id_siswa);

  $cek_fase_1 = $this->androidmodel->selectwhere('riwayat_sekolah',$where)->num_rows();
    if ($cek_fase_1 > 0) {
      $message=array('succes'=>2);
    $this->response($message, 200);
    }else{
      $this->androidmodel->insert('riwayat_sekolah',$data);
      $message=array('succes'=>1);
    $this->response($message, 200);
    }
  }
    else if ($api=="cirikhas") {
    $fnon = $_POST["f_nonjol"];
    $pnon = $_POST["p_nonjol"];
    $bnon = $_POST["b_nonjol"];
    $press=$_POST["pres"];
    $nsau =$_POST["n_saudara"];
    $psau=$_POST["p_saudara"];
    $iduser = $_POST["id_user"];
    $jk = $_POST["jk"];

    $data = array('id_ciri_khas_anak'=>"",
    'ciri_fisik_yang_menonjol' =>$fnon ,
    'ciri_kepribadian_yang_menonjol'=>$pnon,
    'bakat_khusus_yang_menonjol'=>$tanggallahir,
    'prestasi_yang_pernah_diraih'=>$press,
    'usia_siswa'=>$usia,
    'id_user'=>$iduser);
    $data2 = array('id_saudara_kandung'=>'',
      'nama_saudara_kandung'=>$nsau,
      'pendidikan_saudara_kandung'=>$psau,
      'id_jenis_kelamin'=>$jk,
      'kelas_saudara_kandung'=>'',
      'no_induk_saudara_kandung'=>'',
      'id_user'=>$id_user);

    // $cek_fase_1 = $this->androidmodel->selectwhere('ciri_khas_anak',$where)->num_rows();
    //   if ($cek_fase_1 > 0) {
    //     $message=array('succes'=>2);
    //   $this->response($message, 200);
    //   }else{
        $this->androidmodel->insert('ciri_khas_anak',$data);
        $this->androidmodel->insert('saudara_kandung_anak',$data2);
        $message=array('succes'=>1);
      $this->response($message, 200);
      // }

    
    }
  }
}
?>
