<?php 
// use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class out extends REST_Controller{
  function __construct()
  {
	  parent::__construct();
	  $this->load->model('androidmodel');
  }
  function index_get(){
  	if ($this->get('api')=="nilai") {
  		$nilai = $this->androidmodel->get_by_id_nilai($this->get('id'));
      $this->response($nilai,REST_Controller::HTTP_OK);
  	}
  }
}
 ?>