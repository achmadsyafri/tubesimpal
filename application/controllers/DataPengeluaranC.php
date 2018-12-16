<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPengeluaranC extends CI_Controller {

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
     $datax['nama'] = $session_data['nama'];
		 $datax['tes'] = $this->M_Pengeluaran->view_data()->result();
     $this->load->view('DataPengeluaran',  $datax);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
	}

	public function edit($id_pengeluaran){
		$where = array('id_pengeluaran'=>$id_pengeluaran);
		$session_data = $this->session->userdata('logged_in');
		$data['nama'] = $session_data['nama'];
		$data['pengeluaran'] = $this->M_Pengeluaran->edit_data($where, 't_pengeluaran')->result();
		$this->load->view('EditPengeluaran', $data);
	}

	public function hapus($id_pengeluaran){
		$where = array('id_pengeluaran' => $id_pengeluaran);
		$this->M_Pengeluaran->hapus_data($where, 't_pengeluaran');
		redirect('DataPengeluaranC');
	}

	function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('PemasukanInstitusi', 'refresh');
  }
}
