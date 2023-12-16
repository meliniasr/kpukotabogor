<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rekaphasilsuarasah_provinsi extends CI_Model {

public function lists(){
  $this->db->select('*');
  $this->db->from('rekaphasilsuarasah_provinsi');
  $this->db->order_by('id_rekapprovinsi', 'desc');
  return $this->db->get()->result();
}

public function add($data){
  $this->db->insert('rekaphasilsuarasah_provinsi', $data);
}

public function detail($id_rekapprovinsi){
  $this->db->select('*');
  $this->db->from('rekaphasilsuarasah_provinsi');
  $this->db->where('id_rekapprovinsi', $id_rekapprovinsi);
  return $this->db->get()->row();
}

public function edit($data){
  $this->db->where('id_rekapprovinsi', $data['id_rekapprovinsi']);
  $this->db->update('rekaphasilsuarasah_provinsi', $data);
}

public function delete($data){
  $this->db->where('id_rekapprovinsi', $data['id_rekapprovinsi']);
  $this->db->delete('rekaphasilsuarasah_provinsi', $data);
}

public function detail2($id = NULL)
  {
    $query = $this->db->get_where('rekaphasilsuarasah_provinsi', array('id_rekapprovinsi' => $id))->row();
    return $query;
  }


		function rekapprovinsi_user()
  {
    $this->db->where('rekaphasilsuarasah_provinsi.user_id', $this->session->userdata('id_user'));
    return $this->db->get('rekaphasilsuarasah_provinsi')->result();
  }

  function pilpres($id){
	 $query = $this->db->get_where('rekaphasilsuarasah_provinsi', array('tahun' => $id))->row();
    return $query;
	}

  	 function pdf_data($id)
  {
    $this->db->where('id_rekapprovinsi', $id);
    return $this->db->get('rekaphasilsuarasah_provinsi')->row();
  }
}

/* End of file M_rekaphasilsuarasah_provinsi.php */