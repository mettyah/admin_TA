<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class nilai extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        // $this->load->database();
        $this->load->model('androidmodel');
    }

    //Menampilkan data kontak
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $kontak = $this->db->get('nilai')->result();
        } else {
            $this->db->where('id', $id);
            $kontak = $this->db->get('nilai')->result();
        }
        $this->response($kontak, 200);
    }


    //Masukan function selanjutnya disini
}
?>
