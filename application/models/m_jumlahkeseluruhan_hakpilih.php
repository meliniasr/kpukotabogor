<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jumlahkeseluruhan_hakpilih extends CI_Model
{
function get_jk_hakpilih()
  {
    return $this->db->get('jumlahkeseluruhan_hakpilih')->result();
  }

	 function insert($data)
  {
    $this->db->insert('jumlahkeseluruhan_hakpilih', $data);
  }

		 public function detail_data($id = NULL)
  {
    $query = $this->db->get_where('jumlahkeseluruhan_hakpilih', array('id_jk_hakpilih' => $id))->row();
    return $query;
  }

	 function get_id_jk_hakpilih($id)
  {
    $this->db->where('id_jk_hakpilih', $id);
    return $this->db->get('jumlahkeseluruhan_hakpilih')->row();
  }

  function update($id, $data)
  {
    $this->db->where('id_jk_hakpilih', $id);
    $this->db->update('jumlahkeseluruhan_hakpilih', $data);
  }

	 function delete($id)
  {
    $this->db->where('id_jk_hakpilih', $id);
    $this->db->delete('jumlahkeseluruhan_hakpilih');
  }

	function jkhakpilih_user()
  {
    $this->db->where('jumlahkeseluruhan_hakpilih.user_id', $this->session->userdata('id_user'));
    return $this->db->get('jumlahkeseluruhan_hakpilih')->result();
  }

	 function pilpres($id){
	 $query = $this->db->get_where('jumlahkeseluruhan_hakpilih', array('tahun' => $id))->row();
    return $query;
	}

	function pdf_data($id)
  {
    $this->db->where('tahun', $id);
    return $this->db->get('jumlahkeseluruhan_hakpilih')->row();
  }
}

/* End of file M_jumlahkeseluruhan_hakpilih.php */