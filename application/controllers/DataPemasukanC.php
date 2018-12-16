<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPemasukanC extends CI_Controller {

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
     $datax['nama'] = $session_data['nama'];
		 $datax['tes'] = $this->M_Pemasukan->view_data()->result();
     $this->load->view('DataPemasukan',  $datax);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
	}

	public function edit($id_pemasukan){
			$where = array('id_pemasukan'=>$id_pemasukan);
			$session_data = $this->session->userdata('logged_in');
      $data['nama'] = $session_data['nama'];
			$data['pemasukan'] = $this->M_Pemasukan->edit_data($where, 't_pemasukaninstitusi')->result();
			$this->load->view('EditPemasukanInstitusi', $data);
	}

	public function hapus($id_pemasukan){
			$where = array('id_pemasukan' => $id_pemasukan);
			$this->M_Pemasukan->hapus_data($where, 't_pemasukaninstitusi');
			redirect('DataPemasukanC');
	}

	function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('PemasukanInstitusi', 'refresh');
  }
}
