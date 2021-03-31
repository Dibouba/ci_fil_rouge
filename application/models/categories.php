<?php
defined('BASEPATH') or exit('No direct srcipt access allowed');
class categories  extends  CI_Model
{
    public function liste()
    {
        $result=$this->db->get('categories');
        return  $result->result();
    }
}