<?php
defined('BASEPATH') OR exit('No direct srcipt access allowed');
class produit extends CI_controller{
    public function index(){
        $this->load->database();
        $this->load->view('header');
        $this->load->view('inscription');
        // $this->load->view('index');
        $this->load->view('footer');
    }
}
?>