<?php
defined('BASEPATH') or exit('No direct srcipt access allowed');
class ajout extends CI_Model
{
    
        public function insert()
        {
             $requete=array(
                 'pro_id'=>'',
                 'pro_photo'=>'',
                 'pro_ref'=>'',
                 'pro_nom'=>'',
                 'pro_descr'=>'',
                 'pro_pru'=>'',
                 'pro_stk'=>'',
                 'pro_cat_id'=>'',
                 'pro_fou_id'=>''
             );
             $this->db->insert('produits',$requete);
             return $requete;
          // $this->db->set('id',$id);
          // $this->db->set('photo',$photo);
          // $this->db->set('ref',$ref);
          // $this->db->set('nom',$nom);
          // $this->db->set('descr',$descr);
          // $this->db->set('pu',$pu);
          // $this->db->set('stock',$stk);
          // $this->db->set('cat',$cat_id);
          // $this->db->set('fourni',$fou_id);
          // $this->db->set('dateajout',$date);
          // return $this->db->insert($this->produits);
        }
            


    
}
?>