<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PembukuanController extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
		 $this -> load -> model('M_Pengeluaran');
     $this -> load -> model('M_Pemasukan');
     $this -> load -> model('M_Pembukuan');
	 }
	public function index()
	{
		if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $datax['nama'] = $session_data['nama'];
     $this->load->view('PilihTahunView',  $datax);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
	}

	public function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('pelaporan_bulanan_view', 'refresh');
  }

  public function cariTahun()
  {
      $tahun = $this->input->post('tahun');
      $session_data = $this->session->userdata('logged_in');
      $datax['nama'] = $session_data['nama'];
			$datax['tes'] = $this->M_Pembukuan->search_tahun($tahun, 't_laporanbulanan')->result();
			$datax['tahun'] = $tahun;
      $this->load->view('PembukuanView', $datax);
    }

		public function insertData(){
			$idlaporan = "PBK0001";
			$totalpmb = $this->input->post('totalpmb');
			$totalpms = $this->input->post('totalpms');
			$totalpmsall = $totalpmb + $totalpms;
			$totalpng = $this->input->post('totalpng');
			$tahun = $this->input->post('tahun');
			$data = array(
					'id_laporanbulanan'=> $idlaporan,
					'total_pemasukan' => $totalpmsall,
					'total_pengeluaran' => $totalpng,
					'bulan' => $bulan
			);
			$this->M_Pelaporan->insert_laporan($data, 't_laporanbulanan');
			redirect('Pelaporan_BulananC');
		}

  }
