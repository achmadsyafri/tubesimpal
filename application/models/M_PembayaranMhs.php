<?php
Class M_PembayaranMhs extends CI_Model
{
 function insert_pemasukan($data, $table,$jns1,$jns2)
 {
  $this -> db -> insert($table, $data);
   if($jns1!="-"){
				$data1 = array(
					'id_pembayaran'=> $data["id_pembayaran"],
					'id_jenis_pembayaran' => 'SPP'
				);
				 $this -> db -> insert('t_detil_pembayaran',$data1);
			}
			if($jns2!="-"){
				$data2 = array(
					'id_pembayaran'=> $data["id_pembayaran"],
					'id_jenis_pembayaran' => 'UGDG'
				);
				 $this -> db -> insert('t_detil_pembayaran',$data2 );
			}
 }

 function view_data(){
   return $this->db->get('t_pembayaranmhs');
 }

 function edit_data($where, $table){
    return $this->db->get_where($table, $where);
 }

 function getalldetail($id_pembayaran){
    $this->db->select('*');
    $this->db->from('t_pembayaranmhs p');
    $this->db->join('t_detil_pembayaran dp', 'p.id_pembayaran = dp.id_pembayaran', 'INNER');
    $this->db->join('t_jenis_pembayaran jp', 'dp.id_jenis_pembayaran = jp.id_jenis_pembayaran', 'INNER');
    $this->db->where('p.id_pembayaran', $id_pembayaran);
    return $this->db->get();
 }
function getAll($table, $limit = null) {
        $data = array();
        $this->db->select("*");
        $this->db->from($table);
        if (!$limit == null) {
            $this->db->limit($limit);
        }
        $hasil = $this->db->get();
        if ($hasil->num_rows() > 0) {
            $data = $hasil->result();
        }
        $hasil->free_result();
        return $data;
    }
function countAll($table) {
        return $this->db->count_all($table);
    }
 function getalldetailmhs($id_pembayaran){
    $this->db->select('*');
    $this->db->from('t_pembayaranmhs p');
    $this->db->join('t_detil_pembayaran dp', 'p.id_pembayaran = dp.id_pembayaran', 'INNER');
    $this->db->join('t_jenis_pembayaran jp', 'dp.id_jenis_pembayaran = jp.id_jenis_pembayaran', 'INNER');
    $this->db->join('t_mahasiswa m', 'm.nim = p.nim', 'INNER');
    $this->db->where('p.id_pembayaran', $id_pembayaran);
    return $this->db->get();
 }
  function getjns1(){
    $where = $where = array(
			'id_jenis_pembayaran'=> 'SPP'
		);

    return $this->db->get_where('t_jenis_pembayaran',$where)->result();
 }
 function getjns2(){
    $where = $where = array(
			'id_jenis_pembayaran'=> 'UGDG'
		);

    return $this->db->get_where('t_jenis_pembayaran',$where)->result();
 }

 function update_data($where, $data, $table){
    $this->db->where($where);
    $this->db->update($table, $data);
 }
}
?>
