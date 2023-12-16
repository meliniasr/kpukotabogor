<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pasangancalon extends CI_Model {

	public function insertPS($data){
			$this->db->insert('tb_pasangancalon',$data);
			return $this->db->insert_id();
		}
		public function addPP($paslon_id,$partai_id,$user_id){
			$this->db->insert('tb_pendukungpartai',array('paslon_id'=>$paslon_id,'partai_id'=>$partai_id, 'user_id'=>$user_id));
		}

public function lists(){
  $this->db->select('tb_pasangancalon.*,count(tb_pendukungpartai.paslon_id) as jml_foto');
  $this->db->from('tb_pasangancalon', 'tb_partai');
  $this->db->join('tb_pendukungpartai', 'tb_pendukungpartai.paslon_id = tb_pasangancalon.id_pasangancalon', 'left');
  $this->db->group_by('tb_pasangancalon.id_pasangancalon');
  $this->db->order_by('tb_pasangancalon.id_pasangancalon','asc');
  return $this->db->get()->result();
}

public function lists_foto($id_pasangancalon){
  $this->db->select('*');
  $this->db->from('tb_pendukungpartai');
  $this->db->join('tb_partai', 'tb_pendukungpartai.partai_id = tb_partai.id_partai', 'left');
  $this->db->where('paslon_id', $id_pasangancalon);
  $this->db->order_by('id_pendukungpartai', 'desc');
  return $this->db->get()->result();
}

public function detail($id){
  $this->db->select('*');
  $this->db->from('tb_pasangancalon');
  $this->db->where('id_pasangancalon', $id);
  return $this->db->get()->row();
}

	public function detail2($id = NULL)
  {
    $query = $this->db->get_where('tb_pasangancalon', array('id_pasangancalon' => $id))->row();
    return $query;
  }

  	public function detail3($id_pasangancalon = NULL)
  {
    $query = $this->db->get_where('tb_pasangancalon', array('id_pasangancalon' => $id_pasangancalon))->row();
    return $query;
  }

		function pasangancalon_user()
  {
  $this->db->where('tb_pasangancalon.user_id', $this->session->userdata('id_user'));
	$this->db->select('tb_pasangancalon.*,count(tb_pendukungpartai.paslon_id) as jml_foto');
  $this->db->from('tb_pasangancalon', 'tb_partai');
  $this->db->join('tb_pendukungpartai', 'tb_pendukungpartai.paslon_id = tb_pasangancalon.id_pasangancalon', 'left');
  $this->db->group_by('tb_pasangancalon.id_pasangancalon');
  $this->db->order_by('tb_pasangancalon.id_pasangancalon','asc');
  return $this->db->get()->result();
  }

 public function delete($data){
  $this->db->where('id_pasangancalon', $data['id_pasangancalon']);
  $this->db->delete('pasangancalon', $data);
}
		public function deletePP($id_pasangancalon, $data){
		  $this->db->select('*');
      $this->db->from('tb_pendukungpartai');
      $this->db->where('paslon_id', $id_pasangancalon);
		   $this->db->delete('tb_pendukungpartai', $data);
    }

    public function deletePS($id_pasangancalon, $data){
  $this->db->select('*');
  $this->db->from('tb_pasangancalon');
  $this->db->where('id_pasangancalon', $id_pasangancalon);
  $this->db->delete('tb_pendukungpartai', $data);
}

	 function pdf_data($id_pasangancalon)
  {
    $this->db->where('id_pasangancalon', $id_pasangancalon);
    return $this->db->get('tb_pasangancalon')->result();
  }

		public function search_nama($nama)
	{
		$this->db->like('nama',$nama);
		$this->db->order_by('nama', 'DESC');
		$this->db->limit(10);
		return $this->db->get('tb_pasangancalon')->result();
	}

  	public function search_kategori($kategori)
	{
		$this->db->like('kategori',$kategori);
		$this->db->order_by('kategori', 'DESC');
		$this->db->limit(10);
		return $this->db->get('tb_pasangancalon')->result();
	}

     function pilpres($id){
	 $query = $this->db->get_where('tb_pasangancalon', array('tahun' => $id))->row();
    return $query;
     }

    	public function totaldata()
{
    $this->db->where('tb_pasangancalon.user_id', $this->session->userdata('id_user'));
    $query = $this->db->get('tb_pasangancalon');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

public function edit_PS($data){
  $this->db->where('id_pasangancalon', $data['id_pasangancalon']);
  $this->db->update('tb_pasangancalon', $data);
}

public function edit_PP($data){
  $this->db->where('id_pendukungpartai', $data['id_pasangancalon']);
  $this->db->update('tb_pendukungpartai', $data);
}
}
/* End of file M_pasangancalon.php */