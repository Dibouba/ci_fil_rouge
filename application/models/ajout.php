<?php
defined('BASEPATH') or exit('No direct srcipt access allowed');
class ajout extends CI_Model
//function insertion (insert) des données
{
    
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
                 'pro_cat_id'=>$cat,
                 'pro_fou_id'=>$fourni
             );
             $this->db->insert('produits',$requete);
             return $requete;
        }
        //les fonctions de modifications de la table produits
        //******************************************** */
        // function pour récupérer tous les enregistrements des produits
        function show_produit()
        {
        $query = $this->db->get('produits');
        $query_result = $query->result();
        return $query_result;
        }
        // Function pour selectionner tous les produits
             public function show_produit_id($id)
             {
                $this->db->select('*');
                $this->db->from('produits');
                $this->db->where('pro_id', $id);
                $query = $this->db->get();
                $result = $query->result();
                return $result;
              }
        
        //function mise à jour (update) des données
        public function update_produit($id,$photo,$nom,$ref,$descr,$pu,$stock,$cat,$fourni)
        {
          $data=array
          (
              'pro_photo'=>$photo,
              'pro_ref'=>$ref,
              'pro_nom'=>$nom,
              'pro_descr'=>$descr,
              'pro_pru'=>$pu,
              'pro_stk'=>$stock,
              'pro_cat_id'=>$cat,
              'pro_fou_id'=>$fourni
          );
          $this->db->where('pro_id',$id);
          $this->db->update('produits',$data);
        }
        public function supproduit($id)
        {
          $sup= array(
            'pro_photo'=>$_POST['photo'],
            'pro_nom'=>$_POST['nom'],
            'pro_ref'=>$_POST['ref'],
            'pro_descr'=>$_POST['descr'],
            'pro_pru'=>$_POST['pu'],
            'pro_stk'=>$_POST['stock'],
            'cat_nom'=>$_POST['cat'],
            'fou_nom'=>$_POST['fourni'],
          );
          $this->db->delete('produit');
          $this->db->join('categorie','produit.pro');
        }
          


    
}
?>