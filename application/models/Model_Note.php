<?php

class Model_Note extends CI_Model
{
    public function setNotes($idVille)
    {
        $sql = $this->db->query('update ville set scoreVille = scoreVille + 5 where idVille ='.$idVille);

        return $sql->result();
    }
}
