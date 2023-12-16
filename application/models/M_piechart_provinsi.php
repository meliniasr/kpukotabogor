<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_piechart_provinsi extends CI_Model {

public function lists(){
  $this->db->select('*');
  $this->db->from('piechart_provinsi');
  $this->db->order_by('id', 'desc');
  return $this->db->get()->result();
}

public function add($data){
  $this->db->insert('piechart_provinsi', $data);
}

public function detail($id){
  $this->db->select('*');
  $this->db->from('piechart_provinsi');
  $this->db->where('id', $id);
  return $this->db->get()->row();
}

public function edit($data){
  $this->db->where('id', $data['id']);
  $this->db->update('piechart_provinsi', $data);
}

public function delete($data){
  $this->db->where('id', $data['id']);
  $this->db->delete('piechart_provinsi', $data);
}

public function detail2($id = NULL)
  {
    $query = $this->db->get_where('piechart_provinsi', array('id' => $id))->row();
    return $query;
  }


		function piechartprovinsi_user()
  {
    $this->db->where('piechart_provinsi.user_id', $this->session->userdata('id_user'));
    return $this->db->get('piechart_provinsi')->result();
  }

  function pilpres($id){
	 $query = $this->db->get_where('piechart_provinsi', array('tahun' => $id))->row();
    return $query;
	}

      	 function pdf_data($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('piechart_provinsi')->row();
  }

}

/* End of file M_piechart_provinsi.php */