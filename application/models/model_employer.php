<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model_employer
 *
 * @author user
 */
class model_employer extends CI_Controller {
    public function GetAllEmployers() 
            {
                $sql = $this->db->query(" select * from employe ");
                return $sql->result();
            }
}
