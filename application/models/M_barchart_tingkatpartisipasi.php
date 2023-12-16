<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barchart_tingkatpartisipasi extends CI_Model {

public function lists(){
  $this->db->select('*');
  $this->db->from('barchart_tingkatpartisipasi');
  $this->db->order_by('id', 'desc');
  return $this->db->get()->result();
}

public function add($data){
  $this->db->insert('barchart_tingkatpartisipasi', $data);
}

public function detail($id){
  $this->db->select('*');
  $this->db->from('barchart_tingkatpartisipasi');
  $this->db->where('id', $id);
  return $this->db->get()->row();
}

public function edit($data){
  $this->db->where('id', $data['id']);
  $this->db->update('barchart_tingkatpartisipasi', $data);
}

public function delete($data){
  $this->db->where('id', $data['id']);
  $this->db->delete('barchart_tingkatpartisipasi', $data);
}

public function detail2($id = NULL)
  {
    $query = $this->db->get_where('barchart_tingkatpartisipasi', array('id' => $id))->row();
    return $query;
  }


		function barchart_partisipasi_user()
  {
    $this->db->where('barchart_tingkatpartisipasi.user_id', $this->session->userdata('id_user'));
    return $this->db->get('barchart_tingkatpartisipasi')->result();
  }

   function pilpres($id){
	 $query = $this->db->get_where('barchart_tingkatpartisipasi', array('tahun' => $id))->row();
    return $query;
	}

      	 function pdf_data($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('barchart_tingkatpartisipasi')->row();
  }
}

/* End of file M_barchart_tingkatpartisipasi.php */