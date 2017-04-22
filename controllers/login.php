<?php
class Login extends CI_Controller{
  function index(){
    $this->load->model('m_login');
    $data['kelompok'] = $this->m_login->data_kelompok();
    $this->load->view('login_murid', $data);
  }
}
?>
