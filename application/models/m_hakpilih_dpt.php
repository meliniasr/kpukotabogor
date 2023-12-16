<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_hakpilih_dpt extends CI_Model
{
function get_hakpilih_dpt()
  {
    return $this->db->get('hakpilih_dpt')->result();
  }

	 function insert($data)
  {
    $this->db->insert('hakpilih_dpt', $data);
  }

		 public function detail_data($id = NULL)
  {
    $query = $this->db->get_where('hakpilih_dpt', array('id_hakpilih_dpt' => $id))->row();
    return $query;
  }

	 function get_id_hakpilih_dpt($id)
  {
    $this->db->where('id_hakpilih_dpt', $id);
    return $this->db->get('hakpilih_dpt')->row();
  }

  function update($id, $data)
  {
    $this->db->where('id_hakpilih_dpt', $id);
    $this->db->update('hakpilih_dpt', $data);
  }

	 function delete($id)
  {
    $this->db->where('id_hakpilih_dpt', $id);
    $this->db->delete('hakpilih_dpt');
  }

		function hakpilihdpt_user()
  {
    $this->db->where('hakpilih_dpt.user_id', $this->session->userdata('id_user'));
    return $this->db->get('hakpilih_dpt')->result();
  }

	 function pilpres($id){
	 $query = $this->db->get_where('hakpilih_dpt', array('tahun' => $id))->row();
    return $query;
	}

		function pdf_data($id)
  {
    $this->db->where('tahun', $id);
    return $this->db->get('hakpilih_dpt')->row();
  }
}

/* End of file M_hakpilih_dpk.php */
