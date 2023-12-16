<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jumlahkeseluruhan_datapemilih extends CI_Model
{
function get_jk_datapemilih()
  {
    return $this->db->get('jumlahkeseluruhan_datapemilih')->result();
  }

	 function insert($data)
  {
    $this->db->insert('jumlahkeseluruhan_datapemilih', $data);
  }

		 public function detail_data($id = NULL)
  {
    $query = $this->db->get_where('jumlahkeseluruhan_datapemilih', array('id_jk_datapemilih' => $id))->row();
    return $query;
  }

	 function get_id_jk_datapemilih($id)
  {
    $this->db->where('id_jk_datapemilih', $id);
    return $this->db->get('jumlahkeseluruhan_datapemilih')->row();
  }

  function update($id, $data)
  {
    $this->db->where('id_jk_datapemilih', $id);
    $this->db->update('jumlahkeseluruhan_datapemilih', $data);
  }

	 function delete($id)
  {
    $this->db->where('id_jk_datapemilih', $id);
    $this->db->delete('jumlahkeseluruhan_datapemilih');
  }

		function jkdatapemilih_user()
  {
    $this->db->where('jumlahkeseluruhan_datapemilih.user_id', $this->session->userdata('id_user'));
    return $this->db->get('jumlahkeseluruhan_datapemilih')->result();
  }

	 function pilpres($id){
	 $query = $this->db->get_where('jumlahkeseluruhan_datapemilih', array('tahun' => $id))->row();
    return $query;
	}

		public function search_tahun($tahun)
	{
		$this->db->like('tahun',$tahun);
		$this->db->order_by('tahun', 'ASC');
		$this->db->limit(10);
		return $this->db->get('jumlahkeseluruhan_datapemilih')->result();
	}

		function pdf_data($id)
  {
    $this->db->where('tahun', $id);
    return $this->db->get('jumlahkeseluruhan_datapemilih')->row();
  }
}

/* End of file M_jumlahkeseluruhan_datapemilih.php */