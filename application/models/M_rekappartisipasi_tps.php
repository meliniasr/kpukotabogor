<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rekappartisipasi_tps extends CI_Model {

public function lists(){
  $this->db->select('*');
  $this->db->from('rekappartisipasi_tps');
  $this->db->order_by('id_rekap', 'desc');
  return $this->db->get()->result();
}

public function add($data){
  $this->db->insert('rekappartisipasi_tps', $data);
}

public function detail($id_rekap){
  $this->db->select('*');
  $this->db->from('rekappartisipasi_tps');
  $this->db->where('id_rekap', $id_rekap);
  return $this->db->get()->row();
}

public function edit($data){
  $this->db->where('id_rekap', $data['id_rekap']);
  $this->db->update('rekappartisipasi_tps', $data);
}
public function delete($data){
  $this->db->where('id_rekap', $data['id_rekap']);
  $this->db->delete('rekappartisipasi_tps', $data);
}


public function detail2($id_rekap = NULL)
  {
    $query = $this->db->get_where('rekappartisipasi_tps', array('id_rekap' => $id_rekap))->row();
    return $query;
  }


		function rekappartisipasi_tps_user()
  {
    $this->db->where('rekappartisipasi_tps.user_id', $this->session->userdata('id_user'));
    return $this->db->get('rekappartisipasi_tps')->result();
  }

   function pilpres($id){
	 $query = $this->db->get_where('rekappartisipasi_tps', array('tahun' => $id))->row();
    return $query;
	}

 	 function pdf_data($id)
  {
    $this->db->where('id_rekap', $id);
    return $this->db->get('rekappartisipasi_tps')->row();
  }
}

/* End of file M_rekappartisipasi_tps.php */