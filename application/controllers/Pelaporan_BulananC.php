<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelaporan_BulananC extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
		 $this -> load -> model('M_Pengeluaran');
     $this -> load -> model('M_Pemasukan');
     $this -> load -> model('M_Pelaporan');
	 }
	public function index()
	{
		if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $datax['nama'] = $session_data['nama'];
		 $datax['tes_pemasukan'] = $this->M_Pemasukan->view_data()->result();
    $datax['tes_pengeluaran'] = $this->M_Pengeluaran->view_data()->result();
     $this->load->view('pilihbulanview',  $datax);
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

  public function cariTanggal()
  {
      $tanggal = $this->input->post('tanggal');
			$status = "VALIDATED";
      $session_data = $this->session->userdata('logged_in');
      $datax['nama'] = $session_data['nama'];
			$datax['tes'] = $this->M_Pelaporan->search_bulan_pmb($tanggal, 't_pembayaranmhs', $status)->result();
			$datax['tes1'] = $this->M_Pelaporan->search_bulan($tanggal, 't_pemasukaninstitusi')->result();
      $datax['tes2'] = $this->M_Pelaporan->search_bulan($tanggal, 't_pengeluaran')->result();
			$datax['tanga'] = $tanggal;
      $this->load->view('LaporanBulananView', $datax);
    }

		public function insertData(){
			$idlaporan = "LP0001";
			$totalpmb = $this->input->post('totalpmb');
			$totalpms = $this->input->post('totalpms');
			$totalpmsall = $totalpmb + $totalpms;
			$totalpng = $this->input->post('totalpng');
			$bulan = $this->input->post('bulan');
			$data = array(
					'id_laporanbulanan'=> $idlaporan,
					'total_pemasukan' => $totalpmsall,
					'total_pengeluaran' => $totalpng,
					'bulan' => $bulan
			);
			$this->M_Pelaporan->insert_laporan($data, 't_laporanbulanan');
			$datax['pemasukanins'] = $totalpms;
			$datax['pembayaranmhs'] = $totalpmb;
			$datax['pemasukanall'] = $totalpmsall;
			$datax['pengeluaran'] = $totalpng;
			$datax['bulan'] = $bulan;
			$datax['idlap'] = $idlaporan;
			$this->load->view('printLaporan', $datax);
		}

  }
