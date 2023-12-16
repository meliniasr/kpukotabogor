<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_datapemilih_dpt extends CI_Model
{
function get_datapemilih_dpt()
  {
    return $this->db->get('datapemilih_dpt')->result();
  }

	 function insert($data)
  {
    $this->db->insert('datapemilih_dpt', $data);
  }

		 public function detail_data($id = NULL)
  {
    $query = $this->db->get_where('datapemilih_dpt', array('id_datapemilih_dpt' => $id))->row();
    return $query;
  }

	 function get_id_datapemilih_dpt($id)
  {
    $this->db->where('id_datapemilih_dpt', $id);
    return $this->db->get('datapemilih_dpt')->row();
  }

  function update($id, $data)
  {
    $this->db->where('id_datapemilih_dpt', $id);
    $this->db->update('datapemilih_dpt', $data);
  }

	 function delete($id)
  {
    $this->db->where('id_datapemilih_dpt', $id);
    $this->db->delete('datapemilih_dpt');
  }

	function datapemilihdpt_user()
  {
    $this->db->where('datapemilih_dpt.user_id', $this->session->userdata('id_user'));
    return $this->db->get('datapemilih_dpt')->result();
  }


 function pilpres($id){
	 $query = $this->db->get_where('datapemilih_dpt', array('tahun' => $id))->row();
    return $query;
	}

	function pdf_data($id)
  {
    $this->db->where('tahun', $id);
    return $this->db->get('datapemilih_dpt')->row();
  }
}

/* End of file M_datapemilih_dpt.php */