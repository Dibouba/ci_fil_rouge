<?php
defined('BASEPATH') OR exit('No direct srcipt access allowed');
    class action extends CI_Controller{
        public function preg($str){
            //controle du mail
            
            if(!preg_match_all("/^[a-z0-9.-]+@[a-z0-9.-]{2,}.[a-z]{2,4}$/",$str)){
                $this->form_validztion->set_message('preg','e-mail obligatiore');
                return false;
            }
            else{
                return true;
            }
            // controle du mot de passe
            if(!preg_match("^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[$@])\S{8,12}$",$str)){
                $this->form_validation->set_massage('preg','le mot de passe est oblogatoire');
                return false;
            }
            else{
                return true;
            }
            // controle de la confirmation du mot de passe
            if(!preg_match("^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[$@])\S{8,12}$",$str)){
                $this->form_validation->set_massage('preg','le mot de passe est oblogatoire');
                return false;
            }
            else{
                return true;
            }
            // controle du prenom
            if(!preg_match("^[A-Za-z]+$",$str)){
                $this->form_validation->set_message('preg','le prenom est obligatoire');
                return false;
            }
            else{
                return true;
            }
            //controle du nom
            if(!preg_match("^[A-Za-z]+$",$str)){
                $this->form_validation->set_message('preg','le nom est obligatoire');
                return false;
            }
            else{
                return true;
            }
            // controle de l'adresse
            if(!preg_match("^[0-9] [A-Za-z]+ [A-Za-z]+ [A-Za-z]+$",$str)){
                $this->form_validation->set_message('preg','l\'adresse est obligatoire');
                return false;
            }
            else{
                return true;
            }
            // controle du code postal
            if(! preg_match("^[0-9]{5}$",$str)){
                $this->form_validation->set_message('preg','le code postale est obligatoire');
                return false;
            }
            else{
                return true;
            }
            // controle de la ville
            if(!preg_match("^[A-Za-z]+$", $str)){
                $this->form_validation->set_message('preg', 'la ville est oblgatoire');
                return false;
            }
            else{
                return true;
            }
            // controle du pays
            if(!preg_match("^[A-Za-z]+$", $str)){
                $this->form_validation->set_message('preg', 'le pays est oblgatoire');
                return false;
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

            $this->form_validation->set_rules('mail','E-mail', 'required', array('required'=>'le mail est obligatoire'));
            $this->form_validation->set_rules('motdpas', 'Mot de passe', 'required', array('required'=>'renseigner le mot de passe'));
            $this->form_validation->set_rules('confpas', 'Confirmation mot de passe', 'required', array('required'=>'le mot de passe ne correspond pas'));
            $this->form_validation->set_rules('prenom', 'Prénom', 'required', array('required'=>'le prenom est obligatoire'));
            $this->form_validation->set_rules('nom', 'Nom', 'required', array('required'=>'le nom est obligatoire'));
            $this->form_validation->set_rules('adresse', 'Adresse','required', array('required'=>'l\'adresse postal est obligatoire'));
            $this->form_validation->set_rules('compadres', 'Complement d\'adresse');
            $this->form_validation->set_rules('codpos', 'Code postal', 'required', array('required'=>'le code postal est obligatoire'));
            $this->form_validation->set_rules('ville', 'Ville', 'required', array('required'=>'la ville est obligatoire'));
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
            $this->load->database();
            $this->load->view('header');
            //$this->load->view('index');
            $this->load->view('inscription');
            $this->load->view('footer');
        }
        public function index(){
            $this->load->view('header');
            $this->load->view('index');
            $this->load->view('footer');
        }
    }
?>