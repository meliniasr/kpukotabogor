<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_logomaskot extends CI_Model {

public function lists(){
  $this->db->select('*');
  $this->db->from('logomaskot');
  $this->db->order_by('id_logomaskot', 'asc');
  return $this->db->get()->result();
}

public function add($data){
  $this->db->insert('logomaskot', $data);
}

public function detail($id_logomaskot){
  $this->db->select('*');
  $this->db->from('logomaskot');
  $this->db->where('id_logomaskot', $id_logomaskot);
  return $this->db->get()->row();
}

	public function detail2($id = NULL)
  {
    $query = $this->db->get_where('logomaskot', array('id_logomaskot' => $id))->row();
    return $query;
  }

public function edit($data){
  $this->db->where('id_logomaskot', $data['id_logomaskot']);
  $this->db->update('logomaskot', $data);
}

 function update($id, $data)
  {
    $this->db->where('id_logomaskot', $id);
    $this->db->update('logomaskot', $data);
  }

	 function delete($id)
  {
    $this->db->where('id_logomaskot', $id);
    $this->db->delete('logomaskot');
  }

		function logomaskot_user()
  {
    $this->db->where('logomaskot.user_id', $this->session->userdata('id_user'));
    return $this->db->get('logomaskot')->result();
  }

 function get_id_logomaskot($id)
  {
    $this->db->where('id_logomaskot', $id);
    return $this->db->get('logomaskot')->row();
  }

   function jadwal_user()
  {
    $this->db->where('jadwal.user_id', $this->session->userdata('id_user'));
    return $this->db->get('jadwal')->result();
  }

  	 function pdf_data($id)
  {
    $this->db->where('id_logomaskot', $id);
    return $this->db->get('logomaskot')->row();
  }

   function pilpres($id){
	 $query = $this->db->get_where('logomaskot', array('tahun' => $id))->row();
    return $query;
	}

    	public function totaldata()
{
    $this->db->where('logomaskot.user_id', $this->session->userdata('id_user'));
    $query = $this->db->get('logomaskot');
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

/* End of file M_logomaskot.php */