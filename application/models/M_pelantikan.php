<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelantikan extends CI_Model {

public function lists(){
  $this->db->select('*');
  $this->db->from('pelantikan');
  $this->db->order_by('id_pelantikan', 'desc');
  return $this->db->get()->result();
}

public function add($data){
  $this->db->insert('pelantikan', $data);
}

public function detail($id_pelantikan){
  $this->db->select('*');
  $this->db->from('pelantikan');
  $this->db->where('id_pelantikan', $id_pelantikan);
  return $this->db->get()->row();
}

public function edit($data){
  $this->db->where('id_pelantikan', $data['id_pelantikan']);
  $this->db->update('pelantikan', $data);
}

public function delete($data){
  $this->db->where('id_pelantikan', $data['id_pelantikan']);
  $this->db->delete('pelantikan', $data);
}

public function detail2($id_pelantikan = NULL)
  {
    $query = $this->db->get_where('pelantikan', array('id_pelantikan' => $id_pelantikan))->row();
    return $query;
  }


		function pelantikan_user()
  {
    $this->db->where('pelantikan.user_id', $this->session->userdata('id_user'));
    return $this->db->get('pelantikan')->result();
  }

    function pilpres($id){
	 $query = $this->db->get_where('pelantikan', array('tahun' => $id))->row();
    return $query;
	}

 	 function pdf_data($id)
  {
    $this->db->where('id_pelantikan', $id);
    return $this->db->get('pelantikan')->row();
  }

   function get_id_logomaskot($id)
  {
    $this->db->where('id_logomaskot', $id);
    return $this->db->get('logomaskot')->row();
  }
}

/* End of file M_pelantikan.php */