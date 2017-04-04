<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model{
    public function checkname($name){
       $query= $this->db->query("select * from user where uname='$name'");
        return $query->row();
    }
    public function getinsert($name,$pwd){
        $query=$this->db->query("insert into user(uid,uname,pass) values(null,'$name','$pwd')");
        return $query;
    }
}

?>