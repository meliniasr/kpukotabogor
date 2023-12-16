<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_viewmap extends CI_Model {

function get_viewmap()
  {
    return $this->db->get('viewmap')->result();
  }

  function get_kecamatan()
  {
    return $this->db->get('kecamatan')->result();
  }

  function get_kelurahan()
  {
    return $this->db->get('kelurahan')->result();
  }

  function get_geojson()
  {
    return $this->db->get('geojson')->result();
  }
	  function insert($data)
  {
    return $this->db->insert('viewmap', $data);
  }

	public function detail($id_viewmap){
  $this->db->select('*');
  $this->db->from('viewmap');
  $this->db->where('id_viewmap', $id_viewmap);
  return $this->db->get()->row();
}

	public function detail2($id = NULL)
  {
     $this->db->select('
          viewmap.*, kecamatan.id_kecamatan AS kecamatan, kecamatan.kecamatan, kelurahan.id_kelurahan AS kelurahan, kelurahan.kelurahan, geojson.id_geojson AS geojson, geojson.geojson,
        ');
        $this->db->join('kecamatan', 'viewmap.kecamatan = kecamatan.id_kecamatan');
				$this->db->join('kelurahan', 'viewmap.kelurahan = kelurahan.id_kelurahan');
				$this->db->join('geojson', 'viewmap.geojson = geojson.id_geojson');
    $query = $this->db->get_where('viewmap', array('id_viewmap' => $id))->row();
    return $query;
  }

public function edit($data){
  $this->db->where('id_viewmap', $data['id_viewmap']);
  $this->db->update('viewmap', $data);
}

public function delete($data){
  $this->db->where('id_viewmap', $data['id_viewmap']);
  $this->db->delete('viewmap', $data);
}

	function viewmap_user()
  {
     $this->db->select('
          viewmap.*, kecamatan.id_kecamatan AS kecamatan, kecamatan.kecamatan, kelurahan.id_kelurahan AS kelurahan, kelurahan.kelurahan, geojson.id_geojson AS geojson, geojson.geojson,
        ');
        $this->db->join('kecamatan', 'viewmap.kecamatan = kecamatan.id_kecamatan');
				$this->db->join('kelurahan', 'viewmap.kelurahan = kelurahan.id_kelurahan');
				$this->db->join('geojson', 'viewmap.geojson = geojson.id_geojson');
     $this->db->where('viewmap.user_id', $this->session->userdata('id_user'));
    return $this->db->get('viewmap')->result();

  }

   function pilpres($id){
	 $query = $this->db->get_where('viewmap', array('tahun' => $id))->row();
    return $query;
	}

public function all_data()
  {
      $this->db->select('
          viewmap.*, kecamatan.id_kecamatan AS kecamatan, kecamatan.kecamatan, kelurahan.id_kelurahan AS kelurahan, kelurahan.kelurahan, geojson.id_geojson AS geojson, geojson.geojson,
        ');
        $this->db->join('kecamatan', 'viewmap.kecamatan = kecamatan.id_kecamatan');
				$this->db->join('kelurahan', 'viewmap.kelurahan = kelurahan.id_kelurahan');
				$this->db->join('geojson', 'viewmap.geojson = geojson.id_geojson');
    $this->db->from('viewmap');
    return $this->db->get()->result();
  }

 	 function pdf_data($id)
  {
    $this->db->where('id_viewmap', $id);
    return $this->db->get('viewmap')->row();
  }

      	public function totaldata()
{
    $this->db->where('viewmap.user_id', $this->session->userdata('id_user'));
    $query = $this->db->get('viewmap');
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

/* End of file M_viewmap.php */