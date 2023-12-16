<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

  //memunculkan data arsip jadwal dengan paging
public function jadwal($limit,$start){
  $this->db->select('*');
  $this->db->from('jadwal');
  $this->db->join('user', 'user.id_user = jadwal.user_id', 'left');
  $this->db->order_by('id_jadwal', 'desc');
  $this->db->limit($limit,$start);
  return $this->db->get()->result();

}
public function total_jadwal(){
  $this->db->select('*');
  $this->db->from('jadwal');
  $this->db->join('user', 'user.id_user = jadwal.user_id', 'left');
  $this->db->order_by('id_jadwal', 'desc');
  return $this->db->get()->result();
}

public function detail_jadwal($slug_jadwal){
  $this->db->select('*');
  $this->db->from('jadwal');
  $this->db->join('user', 'user.id_user = jadwal.user_id', 'left');
  $this->db->where('slug_jadwal', $slug_jadwal);
  return $this->db->get()->row();
}

public function latest_jadwal(){
  $this->db->select('*');
  $this->db->from('jadwal');
  $this->db->join('user', 'user.id_user = jadwal.user_id', 'left');
  $this->db->order_by('id_jadwal', 'desc');
  $this->db->limit(10);
  return $this->db->get()->result();
}

public function detail_dasarhukum($slug_jadwal){
  $this->db->select('*');
  $this->db->from('dasarhukum');
  $this->db->join('user', 'user.id_user = dasarhukum.user_id', 'left');
  $this->db->where('slug_jadwal', $slug_jadwal);
  return $this->db->get()->row();
}

public function detail_logomaskot($slug_jadwal){
  $this->db->select('*');
  $this->db->from('logomaskot');
  $this->db->join('user', 'user.id_user = logomaskot.user_id', 'left');
  $this->db->where('slug_jadwal', $slug_jadwal);
  return $this->db->get()->row();
}

public function detail_pasangancalon($slug_jadwal){
  $this->db->select('*');
  $this->db->from('tb_pasangancalon');
  $this->db->join('user', 'user.id_user = tb_pasangancalon.user_id', 'left');
  $this->db->where('slug_jadwal', $slug_jadwal);
  return $this->db->get()->result();
}

public function detail_rekapkecamatan($slug_jadwal){
  $this->db->select('*');
  $this->db->from('rekaphasilsuarasah_kecamatan');
  $this->db->join('user', 'user.id_user = rekaphasilsuarasah_kecamatan.user_id', 'left');
  $this->db->where('slug_jadwal', $slug_jadwal);
  return $this->db->get()->row();
}

public function lists_foto($slug_jadwal){
  $this->db->select('*');
  $this->db->from('tb_pendukungpartai');
  $this->db->join('tb_partai', 'tb_pendukungpartai.partai_id = tb_partai.id_partai', 'left');
  $this->db->where('paslon_id', $slug_jadwal);
  $this->db->order_by('id_pendukungpartai', 'desc');
  return $this->db->get()->result();
}

public function detail($slug_jadwal){
  $this->db->select('*');
  $this->db->from('tb_pasangancalon');
  $this->db->where('id_pasangancalon', $slug_jadwal);
  return $this->db->get()->result();
}

	public function detail2($slug_jadwal = NULL)
  {
    $query = $this->db->get_where('tb_pasangancalon', array('id_pasangancalon' => $slug_jadwal))->result();
    return $query;
  }
}

/* End of file M_home.php */