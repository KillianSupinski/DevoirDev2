<?php

class Model_Ville extends CI_Model
{
    public function getAllVille($idRegion)
    {
        $sql = $this->db->query('select idRegion, idVille, nomVille, scoreVille from Ville, region 
                                    where ville.numRegion = region.idRegion 
                                    AND region.idRegion='.$idRegion);

        return $sql->result();
    }

    public function getOneVille()
    {
        $sql = $this->db->query('select idRegion, idVille, nomVille, scoreVille from Ville, region 
                                    where ville.numRegion = region.idRegion 
                                    AND region.idRegion=1');

        return $sql->result();
    }
}
