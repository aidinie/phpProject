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
    public function get_sel($name,$pwd){
        $arr=array(
            'uname'=>$name,
            'pass'=>$pwd,
        );
        $query=$this->db->get_where('user',$arr);
        return $query->row();
    }
    public function getdata(){
        $query=$this->db->get('blog');
        return $query->result();
    }
    public function getallrows(){
//        $query=$this->db->query('select count(*) as allrows from blog');
//        return $query->row();
        $query=$this->db->count_all('blog');
        return $query;
    }
    public function fenye($startno,$pagenum){
//        $sql="select * from blog limit ".$startno.",".$pagenum;
//        $query=$this->db->query($sql);
        $query=$this->db->get('blog',$pagenum,$startno);
        return $query->result();
    }
}

?>