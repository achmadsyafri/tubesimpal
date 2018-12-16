<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PemasukanController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 function __construct()
	 {
	   parent::__construct();
		 $this -> load -> model('M_Pemasukan');
	 }
	public function index()
	{
		if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['nama'] = $session_data['nama'];
     $this->load->view('PemasukanInstitusi', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
	}

	public function insertPemasukan(){
			$id_pemasukan =  $this->input->post('idpemasukan');
			$perihal = $this->input->post('perihal');
			$tanggal = $this->input->post('tanggal');
			$jumlah = $this->input->post('jumlah');
			$pemberi = $this->input->post('pemberi');

			$data = array(
					'id_pemasukan'=> $id_pemasukan,
					'perihal' => $perihal,
					'tanggal' => $tanggal,
					'jumlah' => $jumlah,
					'pemberi' => $pemberi
			);

			$this->M_Pemasukan->insert_pemasukan($data, 't_pemasukaninstitusi');
			redirect('PemasukanController');
	}

	public function updatePemasukan(){
		$id_pemasukan =  $this->input->post('idpemasukan');
		$perihal = $this->input->post('perihal');
		$tanggal = $this->input->post('tanggal');
		$jumlah = $this->input->post('jumlah');
		$pemberi = $this->input->post('pemberi');
		$data = array(
			'perihal' => $perihal,
			'tanggal' => $tanggal,
			'jumlah' => $jumlah,
			'pemberi' => $pemberi
		);
		$where = array(
			'id_pemasukan'=> $id_pemasukan
		);

		$this->M_Pemasukan->update_data($where, $data, 't_pemasukaninstitusi');
		redirect('DataPemasukanC');
	}

	function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('PemasukanController', 'refresh');
  }
}
