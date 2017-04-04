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
              $this->reg();
          }else{
              $rs=$this->user_model->getinsert($name,$pwd);
              if($rs){
                  $this->login();
              }else{
                  $this->reg();
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
  }
?>