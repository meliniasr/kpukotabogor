<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barchart_suratsuara extends CI_Model {

public function lists(){
  $this->db->select('*');
  $this->db->from('barchart_suratsuara');
  $this->db->order_by('id', 'desc');
  return $this->db->get()->result();
}

public function add($data){
  $this->db->insert('barchart_suratsuara', $data);
}

public function detail($id){
  $this->db->select('*');
  $this->db->from('barchart_suratsuara');
  $this->db->where('id', $id);
  return $this->db->get()->row();
}

public function edit($data){
  $this->db->where('id', $data['id']);
  $this->db->update('barchart_suratsuara', $data);
}

public function delete($data){
  $this->db->where('id', $data['id']);
  $this->db->delete('barchart_suratsuara', $data);
}

public function detail2($id = NULL)
  {
    $query = $this->db->get_where('barchart_suratsuara', array('id' => $id))->row();
    return $query;
  }


		function barchart_suratsuara_user()
  {
    $this->db->where('barchart_suratsuara.user_id', $this->session->userdata('id_user'));
    return $this->db->get('barchart_suratsuara')->result();
  }

   function pilpres($id){
	 $query = $this->db->get_where('barchart_suratsuara', array('tahun' => $id))->row();
    return $query;
	}

      	 function pdf_data($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('barchart_suratsuara')->row();
  }
}

/* End of file M_barchart_suratsuara.php */