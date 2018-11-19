<?php

class Model_Ville extends CI_Model
{
    public function getAllVille($idRegion)
    {
        $sql = $this->db->query('select idVille, nomVille, scoreVille from Ville 
                                 where ville.numRegion = region.idRegion 
                                 AND region.idRegion="'.$idRegion.'"');

        return $sql->result();
    }
}
