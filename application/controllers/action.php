<?php
defined('BASEPATH') OR exit('No direct srcipt access allowed');
    class action extends CI_Controller{
        
        //controle du mail
        public function pregmail($str){
            if($str == ''){
                $this->form_validation->set_message(array('required'=>'E-mail obligatoire'));
            }
             else if(!preg_match("/^[a-z0-9.-]+@[a-z0-9.-]{2,}.[a-z]{2,4}$/",$str)){
            // else if(!$this->form_validation->valid_email($str)){
            //     // var_dump($this->form_validation);
                 $this->form_validation->set_message(array('valid_email'=>'E-mail incorrect'));
            //     var_dump("false");
            //     // var_dump($this->form_validation);
            //     // $this->form_validation->set_message('pregmail','e-mail obligatiore');
            //     // return false;
               
             }
            else{
                 return true;
            }
        }
    
    // controle du mot de passe
    public function pregmot($str1){
            if($str1==''){
                $this->form_validation->set_message(array('required'=>'le mot de passe est oblogatoire'));
            }
            else if(!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\w)(?=.*[0-9])\S{8,12}$/", $str1)){
                $this->form_validation->set_message(array('required'=>'le mot de passe est incorrect'));
                // return false;
               
            }
            else{
                 return true;
            }
        }
        // controle de la confirmation du mot de passe
        public function pregconfi($str2){
        
            if($str2==''){
                $this->form_validation->set_message(array('required'=>'confirmer le mot de passe'));
            }
            else if(!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\w)(?=.*[0-9])\S{8,12}$/",$str2)){
                $this->form_validation->set_message(array('required'=>'le mot n\'est pas identique'));
                // return false;
                
            }
            else{
                 return true;
            }
        }
        // controle du prenom
        public function pregprenom($str3){
            if($str3==''){
                $this->form_validation->set_message(array('required'=>'le prenom est obligatoire'));
            }
            else if(!preg_match("/^[A-Za-z]+$/",$str3)){
                $this->form_validation->set_message(array('required'=>'le prenom est incorrect'));
                // return false;
               
            }
            else{
                 return true;
            }
        }
        //controle du nom
        public function pregnom($str4){
            if($str4==''){
                $this->form_validation->set_message(array('required'=>'le nom est obligatoire'));
            }
            else if(!preg_match("/^[A-Za-z]+$/", $str4)){
                $this->form_validation->set_message(array('required'=>'le nom est incorrect'));
                // return false;
               
            }
            else{
                return true;
            }
        }
        // controle de l'adresse
        public function pregadresse($str5){
            if($str5==''){
                $this->form_validation->set_message(array('required'=>'l\'adresse est obligatoire'));
            }
            else if(!preg_match("/^[0-9] [A-Za-z]+ [A-Za-z]+ [A-Za-z]+$/", $str5)){
                $this->form_validation->set_message(array('required'=>'l\'adresse est incorrect'));
                // return false;
                
            }
            else{
                 return true;
            }
        }
        // controle du code postal
        public function pregcodpos($str6){
            if($str6==''){
              $this->form_validation->set_message(array('required'=>'le code postale est obligatoire'));
            }
            else if(!preg_match("/^[0-9]{5}$/", $str6)){
                $this->form_validation->set_message(array('required'=>'le code postale est incorrect'));
              
                // return false;
               
            }
            else{
               
                 return true;
            }
        }
        // controle de la ville
        public function pregville($str7){
            if($str7==''){
                $this->form_validation->set_message(array('required'=>'le nom de la ville est obliagatoire'));
            }
            else if(!preg_match("/^[A-Za-z]+$/", $str7)){
                // $this->form_validation->set_message(array('required'=>'la ville est oblgatoire'));
                $this->form_validation->set_message(array('required'=>'le nom de la ville est incorrect'));
                // $this->form_validation->set_message('pregville', 'la ville est oblgatoire');
                // return false;
                
            }
            else{
                 return true;
            }
        }
        // controle du pays
        public function pregpays($str8){
            if($str8==''){
                $this->form_validation->set_message(array('required'=>'le pays est oblgatoire'));
            }
            else if(!preg_match("/^[A-Za-z]+$/",$str8)){
                $this->form_validation->set_message(array('required'=> 'le nom du pays est incorrect'));
                // return false;
               
            }
            else{
                 return true;
            }
           
        }

        public function contact(){
            // chargement du helper et de la bibliothéques
            // $this->load->helper(array('form','url'));
            // $this->load->library('form_validation');
            // validation du formulaire

            $this->form_validation->set_rules('mail','E-mail', 'required|valid_email',array('valid_email'=>'E-mail incorrect','required'=>'E-mail obligatoire'));
            $this->form_validation->set_rules('motdpas', 'Mot de passe', 'required|callback_pregmot');
            $this->form_validation->set_rules('confpas', 'Confirmation mot de passe', 'required|callback_pregconfi');
            $this->form_validation->set_rules('prenom', 'Prénom', 'required|callback_pregprenom');
            $this->form_validation->set_rules('nom', 'Nom', 'required|callback_pregnom');
            $this->form_validation->set_rules('adresse', 'adresse','required|callback_pregadresse');
            $this->form_validation->set_rules('codpos', 'Code postal', 'required|callback_pregcodpos');
            $this->form_validation->set_rules('ville', 'Ville', 'callback_pregville|required');
            $this->form_validation->set_rules('pays','Pays','required|callback_pregpays');
             // les test de validation
            if($this->form_validation->run()==false){
                //retour la page d'inscription
                $this->load->view('header');
                $this->load->view('inscription');
                $this->load->view('footer');
            }
            else{
                $this->load->view('successful');
            }

        }
        //chargement de la page d'inscription
        public function connexion(){
            
            $this->load->view('header');
            $this->load->view('inscription');
            $this->load->view('footer');
        }
        // chargement de la page index
        public function index(){
           
            $this->load->view('header');
            $this->load->view('index');
            $this->load->view('footer');
        }
        // chargement du tableau pour lister tous les produits
        public function charge(){
            $this->load->model('ajoutproduit');
            $rest = $this->ajoutproduit->liste();
            $data["ajout"] = $rest;
            $this->load->view('header');
            $this->load->view('chargeproduit', $data);
            $this->load->view('footer');
        }
        // chargement et validetion du formulaire d'ajout 
        public function pro_ajout()
        {
            //validation du formulaire d'ajout de produit
            
            $this->form_validation->set_rules('photo', 'Photo','required');
            $this->form_validation->set_rules('ref','Référence','required');
            $this->form_validation->set_rules('nom','Nom','required');
            $this->form_validation->set_rules('descr','Description','required');
            $this->form_validation->set_rules('pu','Prix','required');
            $this->form_validation->set_rules('stock','Stock','required');
            $this->form_validation->set_rules('cat','Catégorie','required');
            $this->form_validation->set_rules('fourni','Fournisseur','required');
            
            // test de validation
            if($this->form_validation->run()==false)
            {
                 //retour au formulaire d'ajout produit
                 $this->load->view('header');
                 $this->load->view('ajoutproduct');
                 $this->load->view('footer');
                 //$this->load->view('error');
            }
            else
            {

                // $this->load->view('succes');
           
                //récupération des données du formulaire d'ajout
                $photo=$this->input->get_post('photo');
                $ref=$this->input->get_post('ref');
                $nom=$this->input->get_post('nom');
                $descr=$this->input->get_post('descr');
                $pu=$this->input->get_post('pu');
                $stock=$this->input->get_post('stock');
                $cat=$this->input->get_post('cat');
                $fourni=$this->input->get_post('fourni');
                //chargement du model pour insertion des données 
                $this->load->model('ajout');
                $this->ajout->insert($photo,$nom,$ref,$descr,$pu,$stock,$cat,$fourni);
                //chargement de la function qui liste tous les produits
                $this->charge();
            }
           // 
        }
        //chargement de la page du formulaire ajout
        // public function ajouterproduit()
        // {
        //     $this->load->view('header');
        //     $this->load->view("ajoutproduct");
        //     $this->load->view("footer");
        // }
        public function update()
        {
            $this->form_validation->set_rules('photo', 'Photo','required');
            $this->form_validation->set_rules('ref','Référence','required');
            $this->form_validation->set_rules('nom','Nom','required');
            $this->form_validation->set_rules('descr','Description','required');
            $this->form_validation->set_rules('pu','Prix','required');
            $this->form_validation->set_rules('stock','Stock','required');
            $this->form_validation->set_rules('cat','Catégorie','required');
            $this->form_validation->set_rules('fourni','Fournisseur','required');

            if($this->form_validation->run()==false)
            {
                $this->load->view('header');
                $this->load->view('modifproduit');
                $this->load->view('footer');
                
            }
            else
            {
                $id=$this->input->get('id');
               
                // $photo=$this->input->get_post('photo');
                // $ref=$this->input->get_post('ref');
                // $nom=$this->input->get_post('nom');
                // $descr=$this->input->get_post('descr');
                // $pu=$this->input->get_post('pu');
                // $stock=$this->input->get_post('stock');
                // $cat=$this->input->get_post('cat');
                // $fourni=$this->input->get_post('fourni');

                $this->load->model('ajout');
                $this->load->ajout->miseajour($id);
                //$this->load->ajout->miseajour($photo,$nom,$ref,$descr,$pu,$stock,$cat,$fourni);
                $this->charge();
                
            }
        }
       
    }
