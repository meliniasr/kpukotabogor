<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_datapemilih_dptb extends CI_Model
{
function get_datapemilih_dptb()
  {
    return $this->db->get('datapemilih_dptb')->result();
  }

	 function insert($data)
  {
    $this->db->insert('datapemilih_dptb', $data);
  }

		 public function detail_data($id = NULL)
  {
    $query = $this->db->get_where('datapemilih_dptb', array('id_datapemilih_dptb' => $id))->row();
    return $query;
  }

	 function get_id_datapemilih_dptb($id)
  {
    $this->db->where('id_datapemilih_dptb', $id);
    return $this->db->get('datapemilih_dptb')->row();
  }

  function update($id, $data)
  {
    $this->db->where('id_datapemilih_dptb', $id);
    $this->db->update('datapemilih_dptb', $data);
  }

	 function delete($id)
  {
    $this->db->where('id_datapemilih_dptb', $id);
    $this->db->delete('datapemilih_dptb');
  }

		function datapemilihdptb_user()
  {
    $this->db->where('datapemilih_dptb.user_id', $this->session->userdata('id_user'));
    return $this->db->get('datapemilih_dptb')->result();
  }

	 function pilpres($id){
	 $query = $this->db->get_where('datapemilih_dptb', array('tahun' => $id))->row();
    return $query;
	}

	function pdf_data($id)
  {
    $this->db->where('tahun', $id);
    return $this->db->get('datapemilih_dptb')->row();
  }
}

/* End of file M_datapemilih_dptb.php */