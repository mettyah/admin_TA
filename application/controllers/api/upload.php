<?php
// use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class upload extends REST_Controller{
  function __construct()
  {
      parent::__construct();
      $this->load->model('androidmodel');
  }
  function index_post(){
    if($api=="ubahfoto"){
            $tgl_sekarang=date("ymdHis");
            $id_user=$_POST["id_user"];
            $path="gambar/daftar_baru/".$this->post('id_user')."_".$tgl_sekarang.".jpeg";
            if (file_put_contents($path, base64_decode($this->post('foto')))) {
                $data = array(
                    'id_gambar' => '',
                    'nama_gambar'=>$path,
                    'id_user'  => $id_user,
                );
                $res = $this->androidmodel->insert('gambar',$data);
                if($res>=0){
                    $this->response(['kode' => 1,'urlFoto' => $path], REST_Controller::HTTP_OK);
                }else{
                    $this->response(['kode' => 2,'pesan' =>'Proses Gagal'], REST_Controller::HTTP_OK);
                }   
            }else{
                $this->response(['kode' => 2,'pesan' =>'Proses Gagal'], REST_Controller::HTTP_OK);
            }
            
        }
?>