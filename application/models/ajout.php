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
        }

    
}
?>