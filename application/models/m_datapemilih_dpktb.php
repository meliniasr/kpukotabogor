<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_datapemilih_dpktb extends CI_Model
{
function get_datapemilih_dpktb()
  {
    return $this->db->get('datapemilih_dpktb')->result();
  }

	 function insert($data)
  {
    $this->db->insert('datapemilih_dpktb', $data);
  }

		 public function detail_data($id = NULL)
  {
    $query = $this->db->get_where('datapemilih_dpktb', array('id_datapemilih_dpktb' => $id))->row();
    return $query;
  }

	 function get_id_datapemilih_dpktb($id)
  {
    $this->db->where('id_datapemilih_dpktb', $id);
    return $this->db->get('datapemilih_dpktb')->row();
  }

  function update($id, $data)
  {
    $this->db->where('id_datapemilih_dpktb', $id);
    $this->db->update('datapemilih_dpktb', $data);
  }

	 function delete($id)
  {
    $this->db->where('id_datapemilih_dpktb', $id);
    $this->db->delete('datapemilih_dpktb');
  }

	function datapemilihdpktb_user()
  {
    $this->db->where('datapemilih_dpktb.user_id', $this->session->userdata('id_user'));
    return $this->db->get('datapemilih_dpktb')->result();
  }

	 function pilpres($id){
	 $query = $this->db->get_where('datapemilih_dpktb', array('tahun' => $id))->row();
    return $query;
	}

	function pdf_data($id)
  {
    $this->db->where('tahun', $id);
    return $this->db->get('datapemilih_dpktb')->row();
  }
}

/* End of file M_datapemilih_dpt.php */
