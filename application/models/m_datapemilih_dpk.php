<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_datapemilih_dpk extends CI_Model
{
function get_datapemilih_dpk()
  {
    return $this->db->get('datapemilih_dpk')->result();
  }

	 function insert($data)
  {
    $this->db->insert('datapemilih_dpk', $data);
  }

		 public function detail_data($id = NULL)
  {
    $query = $this->db->get_where('datapemilih_dpk', array('id_datapemilih_dpk' => $id))->row();
    return $query;
  }

	 function get_id_datapemilih_dpk($id)
  {
    $this->db->where('id_datapemilih_dpk', $id);
    return $this->db->get('datapemilih_dpk')->row();
  }

  function update($id, $data)
  {
    $this->db->where('id_datapemilih_dpk', $id);
    $this->db->update('datapemilih_dpk', $data);
  }

	 function delete($id)
  {
    $this->db->where('id_datapemilih_dpk', $id);
    $this->db->delete('datapemilih_dpk');
  }

		function datapemilihdpk_user()
  {
    $this->db->where('datapemilih_dpk.user_id', $this->session->userdata('id_user'));
    return $this->db->get('datapemilih_dpk')->result();
  }

	 function pilpres($id){
	 $query = $this->db->get_where('datapemilih_dpk', array('tahun' => $id))->row();
    return $query;
	}

	function pdf_data($id)
  {
    $this->db->where('tahun', $id);
    return $this->db->get('datapemilih_dpk')->row();
  }
}

/* End of file M_datapemilih_dpk.php */