<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jadwal extends CI_Model {

function get_jadwal()
  {
    return $this->db->get('jadwal')->result();
  }

	  function insert($data)
  {
    return $this->db->insert('jadwal', $data);
  }

	public function detail($id_jadwal){
  $this->db->select('*');
  $this->db->from('jadwal');
  $this->db->where('id_jadwal', $id_jadwal);
  return $this->db->get()->row();
}

	public function detail2($id = NULL)
  {
    $query = $this->db->get_where('jadwal', array('id_jadwal' => $id))->row();
    return $query;
  }

public function edit($data){
  $this->db->where('id_jadwal', $data['id_jadwal']);
  $this->db->update('jadwal', $data);
}

public function delete($data){
  $this->db->where('id_jadwal', $data['id_jadwal']);
  $this->db->delete('jadwal', $data);
}

	function jadwal_user()
  {
    $this->db->where('jadwal.user_id', $this->session->userdata('id_user'));
    return $this->db->get('jadwal')->result();
  }

  	 function pdf_data($id)
  {
    $this->db->where('id_jadwal', $id);
    return $this->db->get('jadwal')->row();
  }

   function pilpres($id){
	 $query = $this->db->get_where('jadwal', array('tahun' => $id))->row();
    return $query;
	}

    	public function totaldata()
{
    $this->db->where('jadwal.user_id', $this->session->userdata('id_user'));
    $query = $this->db->get('jadwal');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}
}

/* End of file M_jadwal.php */