<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_hakpilih_dpktb extends CI_Model
{
function get_hakpilih_dpktb()
  {
    return $this->db->get('hakpilih_dpktb')->result();
  }

	 function insert($data)
  {
    $this->db->insert('hakpilih_dpktb', $data);
  }

		 public function detail_data($id = NULL)
  {
    $query = $this->db->get_where('hakpilih_dpktb', array('id_hakpilih_dpktb' => $id))->row();
    return $query;
  }

	 function get_id_hakpilih_dpktb($id)
  {
    $this->db->where('id_hakpilih_dpktb', $id);
    return $this->db->get('hakpilih_dpktb')->row();
  }

public function edit($data){
  $this->db->where('id_hakpilih_dpktb', $data['id_hakpilih_dpktb']);
  $this->db->update('dasarhukum', $data);
}


	 function delete($id)
  {
    $this->db->where('id_hakpilih_dpktb', $id);
    $this->db->delete('hakpilih_dpktb');
  }

	function hakpilihdpktb_user()
  {
    $this->db->where('hakpilih_dpktb.user_id', $this->session->userdata('id_user'));
    return $this->db->get('hakpilih_dpktb')->result();
  }

	 function pilpres($id){
	 $query = $this->db->get_where('hakpilih_dpktb', array('tahun' => $id))->row();
    return $query;
	}

		function pdf_data($id)
  {
    $this->db->where('tahun', $id);
    return $this->db->get('hakpilih_dpktb')->row();
  }
}

/* End of file M_hakpilih_dpktb.php */