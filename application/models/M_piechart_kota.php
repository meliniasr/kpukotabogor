<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_piechart_kota extends CI_Model {

public function lists(){
  $this->db->select('*');
  $this->db->from('piechart_kota');
  $this->db->order_by('id', 'desc');
  return $this->db->get()->result();
}

public function add($data){
  $this->db->insert('piechart_kota', $data);
}

public function detail($id){
  $this->db->select('*');
  $this->db->from('piechart_kota');
  $this->db->where('id', $id);
  return $this->db->get()->row();
}

public function edit($data){
  $this->db->where('id', $data['id']);
  $this->db->update('piechart_kota', $data);
}

public function delete($data){
  $this->db->where('id', $data['id']);
  $this->db->delete('piechart_kota', $data);
}

public function detail2($id = NULL)
  {
    $query = $this->db->get_where('piechart_kota', array('id' => $id))->row();
    return $query;
  }


		function piechartkota_user()
  {
    $this->db->where('piechart_kota.user_id', $this->session->userdata('id_user'));
    return $this->db->get('piechart_kota')->result();
  }

    function pilpres($id){
	 $query = $this->db->get_where('piechart_kota', array('tahun' => $id))->row();
    return $query;
	}

    	 function pdf_data($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('piechart_kota')->row();
  }
}

/* End of file M_piechart_kota.php */