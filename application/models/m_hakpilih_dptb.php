<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_hakpilih_dptb extends CI_Model
{
function get_hakpilih_dptb()
  {
    return $this->db->get('hakpilih_dptb')->result();
  }

	 function insert($data)
  {
    $this->db->insert('hakpilih_dptb', $data);
  }

		 public function detail_data($id = NULL)
  {
    $query = $this->db->get_where('hakpilih_dptb', array('id_hakpilih_dptb' => $id))->row();
    return $query;
  }

	 function get_id_hakpilih_dptb($id)
  {
    $this->db->where('id_hakpilih_dptb', $id);
    return $this->db->get('hakpilih_dptb')->row();
  }

  function update($id, $data)
  {
    $this->db->where('id_hakpilih_dptb', $id);
    $this->db->update('hakpilih_dptb', $data);
  }

	 function delete($id)
  {
    $this->db->where('id_hakpilih_dptb', $id);
    $this->db->delete('hakpilih_dptb');
  }

		function hakpilihdptb_user()
  {
    $this->db->where('hakpilih_dptb.user_id', $this->session->userdata('id_user'));
    return $this->db->get('hakpilih_dptb')->result();
  }

	 function pilpres($id){
	 $query = $this->db->get_where('hakpilih_dptb', array('tahun' => $id))->row();
    return $query;
	}

		function pdf_data($id)
  {
    $this->db->where('tahun', $id);
    return $this->db->get('hakpilih_dptb')->row();
  }
}
/* End of file M_hakpilih_dptb.php */
