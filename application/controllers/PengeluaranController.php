<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengeluaranController extends CI_Controller {

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
		 $this -> load -> model('M_Pengeluaran');
	 }
	public function index()
	{
		if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['nama'] = $session_data['nama'];
     $this->load->view('Pengeluaran', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
	}

	public function insertPengeluaran(){
			$id_pengeluaran =  $this->input->post('idpengeluaran');
			$perihal = $this->input->post('perihal');
			$tanggal = $this->input->post('tanggal');
			$jumlah = $this->input->post('jumlah');
			$pengaju = $this->input->post('pengaju');

			$data = array(
					'id_pengeluaran'=> $id_pengeluaran,
					'perihal' => $perihal,
					'tanggal' => $tanggal,
					'jumlah' => $jumlah,
					'pengaju' => $pengaju
			);

			$this->M_Pengeluaran->insert_pengeluaran($data, 't_pengeluaran');
			redirect('PengeluaranController');
	}

	public function updatePengeluaran(){
		$id_pengeluaran =  $this->input->post('idpengeluaran');
		$perihal = $this->input->post('perihal');
		$tanggal = $this->input->post('tanggal');
		$jumlah = $this->input->post('jumlah');
		$pengaju = $this->input->post('pengaju');

		$data = array(
			'perihal' => $perihal,
			'tanggal' => $tanggal,
			'jumlah' => $jumlah,
			'pengaju' => $pengaju
		);
		$where = array(
			'id_pengeluaran'=> $id_pengeluaran
		);

		$this->M_Pengeluaran->update_data($where, $data, 't_pengeluaran');
		redirect('DataPengeluaranC');
	}


	function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('Pengeluaran', 'refresh');
  }
}
