<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ctrl_Acceuil
 *
 * @author user
 */
class Ctrl_Acceuil extends CI_Controller{

    private $model_rayons;

    public function index()
    {
    $this->load->model('model_secteur');
    $data['lesSecteurs'] = $this->model_secteur->GetAllSecteurs();
    $this->load->view('v_secteur',$data);
    }

       public function AfficherLesRayons(){
      $numSecteur = $_GET['numSecteur'];
      $this->load->model('model_rayons') ;
      $data['lesRayons'] = $this->model_rayons->GetAllRayon($numSecteur);
      $this->load->view('v_rayons',$data);
    }
            
            
    public function AfficherLesEmployer()
            {
                 $this->load->model('model_employer');
                 $data['lesEmployers'] = $this->model_employer->GetAllEmployers();
                 $this->load->view('v_employer',$data);
            }
            
    public function AfficherHeureTravail()
                    {
                      $this->load->model('model_heureTravail');
                     $data['lesHeuresTravails'] = $this->model_heureTravail->GetAllHeuresTravail();
                    $this->load->view('v_heureTravail',$data);
                    }
                    
    public function AjouterNouveauTemps()
                {
        $this->load->model('model_nouveauTemps');
       $data['lesNouveauTemps'] = $this->model_nouveauTemps->GetAllnouveauTemps();
       $this->load->view('v_nouveauTemps',$data);
              }
    }