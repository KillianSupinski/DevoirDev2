<?php

class Model_Note extends CI_Model
{
    public function setNotes($idRegion)
    {
        $sql = $this->db->query('update ville set scoreVille = scoreVille + 5 where numRegion ='.$idRegion);
    }

    public function setNotesR()
    {
        $sql = $this->db->query('');
    }
}
