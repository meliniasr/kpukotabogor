<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peta_politik extends CI_Controller {

  public function __construct()
{
  parent::__construct();
 $this->load->model('Select_model', 'mselect');
 $this->load->model('m_viewmap');
}

  public function index()
  {
    $data=array(
      'title' => 'KPU KOTA BOGOR',
      'title2' => 'Data Peta Politik',
      'jadwal_user' => $this->m_jadwal->jadwal_user(),
      'logomaskot_user' => $this->m_logomaskot->logomaskot_user(),
      'datakec'  => $this->mselect->getdatakec(),
      'viewmap' => $this->m_viewmap->all_data(),
      'viewmap_user' => $this->m_viewmap->viewmap_user(),
      'rekapkecamatan_user' => $this->m_rekaphasilpemilu_kecamatan->rekapkecamatan_user(),
      'isi' => 'admin/petapolitik/list'
      );
      $this->load->view('admin/layout/v_wrapper', $data , FALSE);
  }

public function tambah_data(){

    $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('persen_paslon_satu', 'Pasangan Calon 1 (%)', 'trim|required');
		$this->form_validation->set_rules('persen_paslon_dua', 'Pasangan Calon 2 (%)', 'trim|required');
		$this->form_validation->set_rules('jml_paslon_satu', 'Jumlah Pasangan Calon 1', 'trim|required');
		$this->form_validation->set_rules('jml_paslon_dua', 'Jumlah Pasangan Calon 2', 'trim|required');


    $this->form_validation->set_message('required', '{field} Harus di isi');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

    if ($this->form_validation->run() == TRUE) {

      $data = [
            'tahun' => $this->input->post('tahun'),
						'kecamatan' => $this->input->post('kecamatan'),
            'kelurahan' => $this->input->post('kelurahan'),
            'warna' => $this->input->post('warna'),
            'foto_capres' => $this->input->post('foto_capres'),
            'nama' => $this->input->post('nama'),
            'geojson' => $this->input->post('geojson'),
            'persen_paslon_satu' => $this->input->post('persen_paslon_satu'),
            'persen_paslon_dua' => $this->input->post('persen_paslon_dua'),
            'jml_paslon_satu' => $this->input->post('jml_paslon_satu'),
            'jml_paslon_dua' => $this->input->post('jml_paslon_dua'),
						'user_id' => $this->session->userdata('id_user'),
      ];

          $this->m_viewmap->insert($data);
          $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data berhasil di simpan</div>');
          redirect('admin/peta_politik');
        }
				  $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                   'title2' => 'Tambah Data Peta Politik',
                                  'logomaskot_user' => $this->m_logomaskot->logomaskot_user(),
                                  'datakec'  => $this->mselect->getdatakec(),
                                  'viewmap' => $this->m_viewmap->get_viewmap(),
                                  'rekapkecamatan_user' => $this->m_rekaphasilpemilu_kecamatan->rekapkecamatan_user(),
                                  'error' => $this->upload->display_errors(),
                                  'isi' => 'admin/petapolitik/tambah'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);

      }

    function getdatakelurahan(){
    $id_kecamatan = $this->input->post('kecamatan');
    $getdatakel = $this->mselect->getdatakel($id_kecamatan);
    /* var_dump($getdatakel);*/
    echo json_encode($getdatakel);
  }

   function getdatageojson(){
    $id_kelurahan = $this->input->post('kelurahan');
    $getdatageo = $this->mselect->getdatageo($id_kelurahan);
    /* var_dump($getdatageo);*/
    echo json_encode($getdatageo);
  }

  public function get_autofill()
	{
		if(isset($_GET['term'])){
				$result = $this->m_pasangancalon->search_kategori($_GET['term']);
			  if(count ($result) > 0){
					foreach ($result as $row) {
					//	$arr_result[] = $row->kategori;

					$arr_result[] = array(
						'label'     => $row->kategori,
					  'foto_capres' => $row->foto_capres,
            'nama' => $row->nama
					);
						echo json_encode($arr_result);
					}
				}
		}
	}

    public function detail_data($id)
			 {
       $data['title'] = 'KPU KOTA BOGOR';
       $data['title2'] = 'Detail Data Peta Politik';
			 $this->load->model('m_viewmap');
       $detail = $this->m_viewmap->detail2($id);
       $data['detail'] = $detail;
       $data['isi'] = 'admin/petapolitik/detail';
			$this->load->view('admin/layout/v_wrapper', $data, FALSE);
  }

  public function edit($id_viewmap){
   $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('persen_paslon_satu', 'Pasangan Calon 1 (%)', 'trim|required');
		$this->form_validation->set_rules('persen_paslon_dua', 'Pasangan Calon 2 (%)', 'trim|required');
		$this->form_validation->set_rules('jml_paslon_satu', 'Jumlah Pasangan Calon 1', 'trim|required');
		$this->form_validation->set_rules('jml_paslon_dua', 'Jumlah Pasangan Calon 2', 'trim|required');


    $this->form_validation->set_message('required', '{field} Harus di isi');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');


     $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Form Edit Data Peta Politik',
                                  'error' => $this->upload->display_errors(),
                                  'datakec'  => $this->mselect->getdatakec(),
                                  'viewmap' => $this->m_viewmap->all_data(),
                                  'viewmap' => $this->m_viewmap->detail($id_viewmap),
                                  'isi' => 'admin/petapolitik/edit'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);

if ($this->form_validation->run() == TRUE) {
    $data = [
            'id_viewmap' =>$id_viewmap,
            'tahun' => $this->input->post('tahun'),
						'kecamatan' => $this->input->post('kecamatan'),
            'kelurahan' => $this->input->post('kelurahan'),
            'warna' => $this->input->post('warna'),
            'foto_capres' => $this->input->post('foto_capres'),
            'nama' => $this->input->post('nama'),
            'geojson' => $this->input->post('geojson'),
            'persen_paslon_satu' => $this->input->post('persen_paslon_satu'),
            'persen_paslon_dua' => $this->input->post('persen_paslon_dua'),
            'jml_paslon_satu' => $this->input->post('jml_paslon_satu'),
            'jml_paslon_dua' => $this->input->post('jml_paslon_dua'),
						'user_id' => $this->session->userdata('id_user'),
    ];
    $this->m_viewmap->edit($data);
     $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di edit!</p></div>');
    redirect('admin/peta_politik');
 }
}

  public function hapus($id_viewmap){
    $data= array(
      'id_viewmap' =>$id_viewmap,
    );
    $this->m_viewmap->delete($data);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di hapus!</p></div>');
    redirect('admin/peta_politik');
  }

  public function pdf($id)
	{
		$data['viewmap_user'] = $this->m_viewmap->pdf_data($id);
 // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

			$data['viewmap_user'] = $this->m_viewmap->viewmap_user();
		 $this->load->view('pdf/petapolitik', $data);
        // title dari pdf
        $data['title_pdf'] = 'Laporan Data Peta Politik';

        // filename dari pdf ketika didownload
        $file_pdf = 'Laporan Data Peta Politik- KPU KOTA BOGOR (Pilpres)';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "landscape";

				$html = $this->load->view('pdf/petapolitik', $data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }

}

/* End of file Peta_politik.php */