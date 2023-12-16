<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_hakpilih_dpk extends CI_Model
{
function get_hakpilih_dpk()
  {
    return $this->db->get('hakpilih_dpk')->result();
  }

	 function insert($data)
  {
    $this->db->insert('hakpilih_dpk', $data);
  }

		 public function detail_data($id = NULL)
  {
    $query = $this->db->get_where('hakpilih_dpk', array('id_hakpilih_dpk' => $id))->row();
    return $query;
  }

	 function get_id_hakpilih_dpk($id)
  {
    $this->db->where('id_hakpilih_dpk', $id);
    return $this->db->get('hakpilih_dpk')->row();
  }

  function update($id, $data)
  {
    $this->db->where('id_hakpilih_dpk', $id);
    $this->db->update('hakpilih_dpk', $data);
  }

	 function delete($id)
  {
    $this->db->where('id_hakpilih_dpk', $id);
    $this->db->delete('hakpilih_dpk');
  }

	function hakpilihdpk_user()
  {
    $this->db->where('hakpilih_dpk.user_id', $this->session->userdata('id_user'));
    return $this->db->get('hakpilih_dpk')->result();
  }

	 function pilpres($id){
	 $query = $this->db->get_where('hakpilih_dpk', array('tahun' => $id))->row();
    return $query;
	}

	function pdf_data($id)
  {
    $this->db->where('tahun', $id);
    return $this->db->get('hakpilih_dpk')->row();
  }
}

/* End of file M_hakpilih_dpk.php */