<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rekaphasilpemilu_kecamatan extends CI_Model {

public function lists(){
  $this->db->select('*');
  $this->db->from('rekaphasilsuarasah_kecamatan');
  $this->db->order_by('id_rekapkecamatan', 'desc');
  return $this->db->get()->result();
}

public function add($data){
  $this->db->insert('rekaphasilsuarasah_kecamatan', $data);
}

public function detail($id_dasarhukum){
  $this->db->select('*');
  $this->db->from('rekaphasilsuarasah_kecamatan');
  $this->db->where('id_rekapkecamatan', $id_dasarhukum);
  return $this->db->get()->row();
}

public function edit($data){
  $this->db->where('id_rekapkecamatan', $data['id_rekapkecamatan']);
  $this->db->update('rekaphasilsuarasah_kecamatan', $data);
}

public function delete($data){
  $this->db->where('id_rekapkecamatan', $data['id_rekapkecamatan']);
  $this->db->delete('rekaphasilsuarasah_kecamatan', $data);
}

public function detail2($id = NULL)
  {
    $query = $this->db->get_where('rekaphasilsuarasah_kecamatan', array('id_rekapkecamatan' => $id))->row();
    return $query;
  }


		function rekapkecamatan_user()
  {
    $this->db->where('rekaphasilsuarasah_kecamatan.user_id', $this->session->userdata('id_user'));
    return $this->db->get('rekaphasilsuarasah_kecamatan')->result();
  }

  function pilpres($id){
	 $query = $this->db->get_where('rekaphasilsuarasah_kecamatan', array('tahun' => $id))->row();
    return $query;
	}

  	 function pdf_data($id)
  {
    $this->db->where('id_rekapkecamatan', $id);
    return $this->db->get('rekaphasilsuarasah_kecamatan')->row();
  }
}

/* End of file M_rekaphasilpemilu_kecamatan.php */