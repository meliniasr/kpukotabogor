<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_piechart_nasional extends CI_Model {

public function lists(){
  $this->db->select('*');
  $this->db->from('piechart_nasional');
  $this->db->order_by('id', 'desc');
  return $this->db->get()->result();
}

public function add($data){
  $this->db->insert('piechart_nasional', $data);
}

public function detail($id){
  $this->db->select('*');
  $this->db->from('piechart_nasional');
  $this->db->where('id', $id);
  return $this->db->get()->row();
}

public function edit($data){
  $this->db->where('id', $data['id']);
  $this->db->update('piechart_nasional', $data);
}

public function delete($data){
  $this->db->where('id', $data['id']);
  $this->db->delete('piechart_nasional', $data);
}

public function detail2($id = NULL)
  {
    $query = $this->db->get_where('piechart_nasional', array('id' => $id))->row();
    return $query;
  }


		function piechartnasional_user()
  {
    $this->db->where('piechart_nasional.user_id', $this->session->userdata('id_user'));
    return $this->db->get('piechart_nasional')->result();
  }

   function pilpres($id){
	 $query = $this->db->get_where('piechart_nasional', array('tahun' => $id))->row();
    return $query;
	}

    	 function pdf_data($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('piechart_nasional')->row();
  }
}

/* End of file M_piechart_nasional.php */