<?php
defined('BASEPATH') or exit('No direct srcipt access allowed');
class ajoutproduit  extends  CI_Model
{
    public function construct(){
        $this->load->database();
    }
    public function liste(){
        $result=$this->db->get('produits');
       
         return  $result->result();
    }
}
