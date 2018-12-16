<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PembayaranController extends CI_Controller {

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
     $data['nama'] = $session_data['nama'];
	 $table='t_mahasiswa';
	 $data['total_rows'] = $this->M_PembayaranMhs->countAll($table);
	 $data['mhs'] = $this->M_PembayaranMhs->getAll($table,10);
	 $data['total_row'] = $this->M_PembayaranMhs->countAll('t_jenis_pembayaran');
	 $data['jns1'] = $this->M_PembayaranMhs->getjns1();
	 $data['jns2'] = $this->M_PembayaranMhs->getjns2();
	 $data['nama'] = $session_data['nama'];
     $this->load->view('addPembayaran', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
	}

	public function insertPembayaran(){
			$id_pembayaran =  $this->input->post('idpembayaran');
			$nim = $this->input->post('nim');
			$tanggal = $this->input->post('tanggal');
			
			//$pemberi = $this->input->post('pemberi');
			$jns1 = $this->input->post('b1');
			$jns2 = $this->input->post('b2');
			
			$data = array(
					'id_pembayaran'=> $id_pembayaran,
					'nim' => $nim,
					'tanggal' => $tanggal,
					'jumlah' => $jns1+$jns2,
					'status' => 'not yet'
			);
			$this->M_PembayaranMhs->insert_pemasukan($data, 't_pembayaranmhs',$jns1,$jns2);
			
			
			redirect('PembayaranController');
	}

	public function updatePembayaran(){
		$id_pembayaran =  $this->input->post('idpembayaran');
			$nim = $this->input->post('nim');
			$tanggal = $this->input->post('tanggal');
			$jumlah = $this->input->post('jumlah');
		$data = array(
			'nim' => $nim,
					'tanggal' => $tanggal,
					'jumlah' => $jumlah
		);
		$where = array(
			'id_pembayaran'=> $id_pembayaran,
		);

		$this->M_PembayaranMhs->update_data($where, $data, 't_pembayaranmhs');
		redirect('DataPembayaranC');
	}

	function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('PembayaranController', 'refresh');
  }
}
