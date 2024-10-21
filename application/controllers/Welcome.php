<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

 public function __construct(){
 	parent::__construct();
 	 $this->load->model ('Users_model');

 }
	public function index()
	{

	// echo "dfgdfgfd"; die ;
		// // 
		//  $data = $this->Users_model->get_user();
		//  // echo "<pre>";
		//  echo json_encode($data); die;
		$this->load->view('welcome_message');
	}
}
