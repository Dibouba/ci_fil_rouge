<?php
defined('BASEPATH') or exit('No direct srcipt access allowed');
class produits  extends  CI_Model
{
    public function liste()
    {
        $result=$this->db->get('produits');
        return  $result->result();
    }

    public function insert($photo,$nom,$ref,$descr,$pu,$stock,$cat,$fourni)
    {
        $requete=array
        (
            'pro_photo'=>$photo,
            'pro_ref'=>$ref,
            'pro_nom'=>$nom,
            'pro_descr'=>$descr,
            'pro_pru'=>$pu,
            'pro_stk'=>$stock,
            'pro_cat_id'=>intval($cat),
            'pro_fou_id'=>intval($fourni)
        );
        $this->db->insert('produits',$requete);
        return $requete;
    }
    
    //function mise à jour (update) des données
    public function miseajour($id,$photo,$nom,$ref,$descr,$pu,$stock,$cat,$fourni)
    {
        $mise=array
        (
            'pro_photo'=>$photo,
            'pro_nom'=>$nom,
            'pro_ref'=>$ref,
            'pro_descr'=>$descr,
            'pro_pru'=>$pu,
            'pro_stk'=>$stock,
            'pro_cat_id'=>$cat,
            'pro_fou_id'=>$fourni
        );
        $this->db->where('pro_id',$id);
        $this->db->update('produits',$mise);
    }
}