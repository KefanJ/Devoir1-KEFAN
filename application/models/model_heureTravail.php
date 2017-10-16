<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model_heureTravail
 *
 * @author user
 */
class model_heureTravail extends CI_Controller {
    public function GetAllHeuresTravail() 
            {
                $sql = $this->db->query(" select * from travail ");
                return $sql->result();
            }
}
