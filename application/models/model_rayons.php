<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model_rayons
 *
 * @author user
 */
class model_rayons extends CI_Controller {
    public function GetAllRayon($numSecteur){
      $sql = $this->db->select('*')->from('rayon')->where('numSecteur',$numSecteur);
        $sql = $this->db->get();
        foreach ($sql->result() as $row)
        {
            $data[] = $row;
        }
        return $data;

    }
}
