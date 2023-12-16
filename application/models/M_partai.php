<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_partai extends CI_Model {

    public function get_partai(){
      $this->db->select('*');
      $this->db->from('tb_partai');
      $this->db->order_by('id_partai', 'asc');
      return $this->db->get()->result();
  }


  public function add($data){
  $this->db->insert('tb_partai', $data);
}

public function detail($id_partai){
  $this->db->select('*');
  $this->db->from('tb_partai');
  $this->db->where('id_partai', $id_partai);
  return $this->db->get()->row();
}

public function edit($data){
  $this->db->where('id_partai', $data['id_partai']);
  $this->db->update('tb_partai', $data);
}

	public function detail2($id = NULL)
  {
    $query = $this->db->get_where('tb_partai', array('id_partai' => $id))->row();
    return $query;
  }
public function delete($data){
  $this->db->where('id_partai', $data['id_partai']);
  $this->db->delete('tb_partai', $data);
}

	public function totaldata()
{
    $query = $this->db->get('tb_partai');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

			 function pdf_data($id)
  {
    $this->db->where('id_partai', $id);
    return $this->db->get('tb_partai')->row();
  }

  public function all_data()
  {
    $this->db->select('*');
    $this->db->from('tb_partai');
    return $this->db->get()->result();
  }
}

/* End of file M_partai.php */