<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_geojson extends CI_Model {

function get_geojson()
  {
    return $this->db->get('geojson')->result();
  }

	  function insert($data)
  {
    return $this->db->insert('geojson', $data);
  }


}

/* End of file M_geojson.php */