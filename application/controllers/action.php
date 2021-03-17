<?php
defined('BASEPATH') OR exit('No direct srcipt access allowed');
    class action extends CI_Controller{

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
            $this->form_validation->set_rules('pays','Pays', 'required', array('required'=>'le pays est obligatoire'));
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
        public function index(){
            $this->load->database();
            $this->load->view('header');
            $this->load->view('inscription');
            // $this->load->view('index');
            $this->load->view('footer');
        }
    }
?>