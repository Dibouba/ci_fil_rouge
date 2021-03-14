<?php
defined('BASEPATH') OR exit('No direct srcipt access allowed');
class produit extends CI_controller{
    public function liste(){
        $this->load->database();
        $this->load->view('header');
        $this->load->view('index');
        $this->load->view('footer');
    }
}
?>