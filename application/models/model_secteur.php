<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model_secteur
 *
 * @author user
 */
class model_secteur extends CI_Controller {
     public function GetAllSecteurs() 
            {
                $sql = $this->db->query(" select * from secteur ");
                return $sql->result();
            }
    
}
