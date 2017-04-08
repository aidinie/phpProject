<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class User extends CI_Controller{
      public function __construct()
      {
          parent::__construct();
      }
      public function reg(){
          $this->load->view('reg.php');
      }
      public function doreg(){
          $name=$this->input->post('uname');
          $pwd=$this->input->post('pwd');
          $this->load->model('user_model');
          $rs=$this->user_model->checkname($name);
          if($rs){
//              $this->reg();
              redirect('user/reg');
          }else{
              $rs=$this->user_model->getinsert($name,$pwd);
              if($rs){
                  redirect('user/login');
                  //$this->login();
              }else{
                  redirect('user/reg');
                 // $this->reg();
              }
          }
      }
      public function login(){
          $this->load->view('login.php');
      }
      public function check(){
          header('Access-Control-Allow-Origin:*');
          $this->load->model('user_model');
          $name=$this->input->post('uname');
          $rs=$this->user_model->checkname($name);
          if ($rs){
              echo "exist";
          }else{
              echo 'success';
          }
      }
      public function index(){
          $this->load->view('index.php');
      }
      public function dologin(){
          $name=$this->input->post('uname');
          $pwd=$this->input->post('pwd');
          $this->load->model('user_model');
          $rs=$this->user_model->get_sel($name,$pwd);
          if($rs){

              $newdata = array(
                  'uname'  => $rs->uname,
                  'uid'     => $rs->uid,
              );


              $this->session->set_userdata($newdata);
           redirect('user/index');
          }
      }
  }
?>