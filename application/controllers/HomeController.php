<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

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
		 if($session_data['status'] == "adm"){
			 $data['nama'] = $session_data['nama'];
			 $data['tes'] = $this->M_PembayaranMhs->view_data()->result();
			 $this->load->view('home', $data);
		 } elseif ($session_data['status'] == "mhs") {
			 		$data['nim'] = $session_data['nim'];
  			 $data['nama'] = $session_data['nama'];
  			 $this->load->view('homemahasiswa', $data);
		 }
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
	}

	public function searchdatamhs(){
		if($this->session->userdata('logged_in'))
		{
		 $session_data = $this->session->userdata('logged_in');
		 $data['nama'] = $session_data['nama'];
		// $data['nim'] = $session_data['nim'];
		 $id_pembayaran = $this->input->post('id_pembayaran');
		 $nim = $this->input->post('nim');
		 $where = array('id_pembayaran' => $id_pembayaran);
		 $wherenim = array('nim' => $nim);
		 $data['text'] = $this->M_PembayaranMhs->edit_data($wherenim, 't_mahasiswa')->result();
		 $data['pembayaran'] = $this->M_PembayaranMhs->edit_data($where, 't_pembayaranmhs')->result();
		 $data['detil'] = $this->M_PembayaranMhs->getalldetailmhs($id_pembayaran)->result();
		 $this->load->view('searchpembayaranmhs', $data);
		}
		else
		{
		 //If no session, redirect to login page
		 redirect('login', 'refresh');
		}

	}

	public function view_detail($id_pembayaran){
		if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['nama'] = $session_data['nama'];
		 $where = array('id_pembayaran' => $id_pembayaran);
		 $data['pembayaran'] = $this->M_PembayaranMhs->edit_data($where, 't_pembayaranmhs')->result();
 		 $data['detil'] = $this->M_PembayaranMhs->getalldetail($id_pembayaran)->result();
 		 $this->load->view('DetailPembayaranMhs', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }

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

	public function validation($id_pembayaran){
		 $valid = array('status' => "VALIDATED");
		 $where = array('id_pembayaran' => $id_pembayaran);
		 $this->M_PembayaranMhs->update_data($where, $valid, 't_pembayaranmhs');
 		redirect('HomeController');
	}

	function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('HomeController', 'refresh');
  }
}
