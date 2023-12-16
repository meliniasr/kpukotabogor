<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dasarhukum extends CI_Model {
public function lists(){
  $this->db->select('*');
  $this->db->from('dasarhukum');
  $this->db->order_by('id_dasarhukum', 'desc');
  return $this->db->get()->result();
}

	function jadwal_user()
  {
    $this->db->where('jadwal.user_id', $this->session->userdata('id_user'));
    return $this->db->get('jadwal')->result();
  }

public function add($data){
  $this->db->insert('dasarhukum', $data);
}

public function detail($id_dasarhukum){
  $this->db->select('*');
  $this->db->from('dasarhukum');
  $this->db->where('id_dasarhukum', $id_dasarhukum);
  return $this->db->get()->row();
}

public function edit($data){
  $this->db->where('id_dasarhukum', $data['id_dasarhukum']);
  $this->db->update('dasarhukum', $data);
}

public function delete($data){
  $this->db->where('id_dasarhukum', $data['id_dasarhukum']);
  $this->db->delete('dasarhukum', $data);
}
		function dasarhukum_user()
  {
    $this->db->where('dasarhukum.user_id', $this->session->userdata('id_user'));
    return $this->db->get('dasarhukum')->result();
  }

public function detail2($id = NULL)
  {
    $query = $this->db->get_where('dasarhukum', array('id_dasarhukum' => $id))->row();
    return $query;
  }

  	public function totaldata()
{
    $this->db->where('dasarhukum.user_id', $this->session->userdata('id_user'));
    $query = $this->db->get('dasarhukum');
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
    $this->db->where('id_dasarhukum', $id);
    return $this->db->get('dasarhukum')->row();
  }

   function pilpres($id){
	 $query = $this->db->get_where('dasarhukum', array('tahun' => $id))->row();
   $this->db->where('dasarhukum.user_id', $this->session->userdata('id_user'));
    return $query;
	}
}

/* End of file M_dasarhukum.php */