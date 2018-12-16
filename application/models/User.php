<?php
Class User extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('username, password, nama, status');
   $this -> db -> from('t_admin');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', $password);
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
 function loginmhs($username, $password)
 {
   $this -> db -> select('username, password, nama, status');
   $this -> db -> from('t_mahasiswa');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', $password);
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
 function add_user() {
   $stat = "adm";
    $data = array(
      'username' =>$this->input->post('username'),
      'nama'=>$this->input->post('nama'),
      'email'=>$this->input->post('email'),
      'password'=>$this->input->post('password'),
        'no_hp'=>$this->input->post('no_hp'),
        'status'=>$stat
    );
    $this->db->insert('t_admin',$data);
 }


}
?>
