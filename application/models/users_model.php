
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model  {

     public function __construct()
     {
         parent::__construct();
     }
	 

	public function get_user (){

		$table = "users";
  		$query = $this->db->get($table);
        return $query->result_array();
	}
}
