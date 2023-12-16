<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {

 public $id='id_user';
 function getAuth(){
	    return $this->db->get('user')->result();
 }
function insert($data){
	$this->db->insert('user', $data);
}
function get_tahun_user($id){
	$this->db->where('tahun', $id);
	return $this->db->get('user')->row();
}


}

/* End of file M_auth.php */