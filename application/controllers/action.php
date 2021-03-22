<?php
defined('BASEPATH') OR exit('No direct srcipt access allowed');
    class action extends CI_Controller{
        
        
        public function pregmail($str){
            //controle du mail
            if($str == ''){
                $this->form_validation->set_message(array('required'=>'E-mail obligatoire'));
            }
            // else if(!preg_match("/^[a-z0-9.-]+@[a-z0-9.-]{2,}.[a-z]{2,4}$/",$str)){
            // else if(!$this->form_validation->valid_email($str)){
            //     // var_dump($this->form_validation);
            //     $this->form_validation->set_message(array('valid_email'=>'E-mail incorrect'));
            //     var_dump("false");
            //     // var_dump($this->form_validation);
            //     // $this->form_validation->set_message('pregmail','e-mail obligatiore');
            //     // return false;
               
            // }
            else{
                // return true;
            }
        }
        public function pregmot($str1){
            // controle du mot de passe
            if(!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[$@])\S{8,12}$/", $str1)){
                $this->form_validation->set_message('pregmot','le mot de passe est oblogatoire');
                // return false;
               
            }
            else{
                // return true;
            }
        }
        public function pregconfi($str2){
            // controle de la confirmation du mot de passe
            if(!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[$@])\S{8,12}$/",$str2)){
                $this->form_validation->set_message('pregconfi','le mot de passe est oblogatoire');
                // return false;
                
            }
            else{
                // return true;
            }
        }
        public function pregprenom($str3){
            // controle du prenom
            if(!preg_match("/^[A-Za-z]+$/",$str3)){
                $this->form_validation->set_message('pregprenom','le prenom est obligatoire');
                // return false;
               
            }
            else{
                // return true;
            }
        }
        public function pregnom($str4){
            //controle du nom
            if(!preg_match("/^[A-Za-z]+$/", $str4)){
                $this->form_validation->set_message('pregnom','le nom est obligatoire');
                // return false;
               
            }
            else{
                // return true;
            }
        }
        public function pregadresse($str5){
            // controle de l'adresse
            if(!preg_match("/^[0-9] [A-Za-z]+ [A-Za-z]+ [A-Za-z]+$/", $str5)){
                $this->form_validation->set_message(array('required'=>'l\'adresse est obligatoire'));
                // return false;
                
            }
            else{
                // return true;
            }
        }
        public function pregcodpos($str6){
            // controle du code postal
            if(!preg_match("/^[0-9]{5}$/", $str6)){
                $this->form_validation->set_message(array('required'=>'le code postale est obligatoire'));
                var_dump("false");
                // return false;
               
            }
            else{
                var_dump("true");
                // return true;
            }
        }
        public function pregville($str7){
            // controle de la ville
            if(!preg_match("/^[A-Za-z]+$/", $str7)){
                // $this->form_validation->set_message(array('required'=>'la ville est oblgatoire'));
                $this->form_validation->set_message(array('required'=>'renseigner la ville'));
                // $this->form_validation->set_message('pregville', 'la ville est oblgatoire');
                // return false;
                
            }
            else{
                // return true;
            }
        }
        public function pregpays($str8){
            // controle du pays
            if(!preg_match("/^[A-Za-z]+$/",$str8)){
                $this->form_validation->set_message('pregpays', 'le pays est oblgatoire');
                // return false;
               
            }
            else{
                // return true;
            }
            // var_dump($str);
            return true;
        }

        public function contact(){
            // chargement du helper et de la bibliothéques
            // $this->load->helper(array('form','url'));
            // $this->load->library('form_validation');
            // validation du formulaire

            $this->form_validation->set_rules('mail','E-mail', 'required|valid_email',array('valid_email'=>'E-mail incorrect','required'=>'E-mail obligatoire'));
            $this->form_validation->set_rules('motdpas', 'Mot de passe', 'required|callback_pregmot',array('required'=>'mot de passe incorrect'));
            $this->form_validation->set_rules('confpas', 'Confirmation mot de passe', 'required|callback_pregconfi',array('required'=>'mot de passe ne correspond pas'));
            $this->form_validation->set_rules('prenom', 'Prénom', 'required|callback_pregprenom',array('required'=>'renseigner le prénom'));
            $this->form_validation->set_rules('nom', 'Nom', 'required|callback_pregnom',array('required'=>'renseigner le nom'));
            $this->form_validation->set_rules('adresse', 'adresse','required|callback_pregadresse');
            $this->form_validation->set_rules('codpos', 'Code postal', 'callback_pregcodpos');
            $this->form_validation->set_rules('ville', 'Ville', 'callback_pregville|required');
            $this->form_validation->set_rules('pays','Pays','required|callback_pregpays',array('required'=>'renseigner le pays'));
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
        public function connexion(){
            
            $this->load->view('header');
            //$this->load->view('index');
            $this->load->view('inscription');
            $this->load->view('footer');
        }
        public function index(){
            // $this->load->database();
            $this->load->view('header');
            $this->load->view('index');
            $this->load->view('footer');
        }
    }
?>