<?php
Class M_Pelaporan extends CI_Model
{

function M_Pelaporan(){
  parent::__construct();
 }

 function view_data(){

 	$this->db->get('t_pengeluaran');
 	$this->db->get('tb_pemasukaninstitusi');
 }

 function search_bulan($tanggal, $table){
   $this->db->select('*');
   $this->db->from($table);
   $this->db->where("DATE_FORMAT(tanggal, '%M %Y') = ", $tanggal);
   return $this->db->get();
 	}
  function search_bulan_pmb($tanggal, $table, $status){
    $this->db->select('*');
    $this->db->from($table);
    $this->db->where("DATE_FORMAT(tanggal, '%M %Y') = ", $tanggal);
    $this->db->where('status', $status);
    return $this->db->get();
   }

   function insert_laporan($data, $table)
   {
     $this -> db -> insert($table, $data);
   }
}
?>
