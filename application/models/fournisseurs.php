<?php
defined('BASEPATH') or exit('No direct srcipt access allowed');
class fournisseurs  extends  CI_Model
{
    public function liste()
    {
        $result=$this->db->get('fournisseurs');
        return  $result->result();
    }
}