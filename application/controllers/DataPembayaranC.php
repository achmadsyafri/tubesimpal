<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPembayaranC extends CI_Controller {

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
		 $this -> load -> model('M_PembayaranMhs');
	 }
	public function index()
	{
		if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $datax['nama'] = $session_data['nama'];
		 $datax['tes'] = $this->M_PembayaranMhs->view_data()->result();
     $this->load->view('Home',  $datax);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
	}

	public function edit($id_pembayaran){
			$where = array('id_pembayaran'=>$id_pembayaran);
			$session_data = $this->session->userdata('logged_in');
      $data['nama'] = $session_data['nama'];
			$data['pembayaran'] = $this->M_PembayaranMhs->edit_data($where, 't_pembayaranmhs')->result();
			$this->load->view('EditPembayaranMhs', $data);
	}

	public function hapus($id_pembayaran){
			$where = array('id_pembayaran' => $id_pembayaran);
			$this->M_PembayaranMhs->hapus_data($where, 't_pembayaranmhs');
			redirect('DataPembayaranC');
	}

	function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('Home', 'refresh');
  }
}
