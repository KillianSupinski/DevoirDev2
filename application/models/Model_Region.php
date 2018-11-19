<?php

class Model_Region extends CI_Model
{
    public function getAllRegion()
    {
        $sql = $this->db->query('select idRegion, nomRegion, scoreRegion from region');

        return $sql->result();
    }

    public function getOneRegion()
    {
        $sql = $this->db->query('select idRegion, nomRegion, scoreRegion from region where nomRegion="Bourgogne" ');

        return $sql->result();
    }
}
