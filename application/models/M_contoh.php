<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_contoh extends CI_Model {

public function insertPS($data){
			$this->db->insert('tb_pasangancalon',$data);
			return $this->db->insert_id();
		}
		public function addPP($pasangancalon_id,$bendera,$user_id){
			$this->db->insert('tb_pendukungpartai',array('pasangancalon_id'=>$pasangancalon_id,'bendera'=>$bendera, 'user_id'=>$user_id));
		}

function get_PP()
  {
    return $this->db->get('tb_pendukungpartai')->result();
  }
}

/* End of file M_contoh.php */