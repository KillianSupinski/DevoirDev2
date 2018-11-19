<?php

class Model_Connexion extends CI_Model
{
    public function Connexion($nomUser)
    {
        $sql = $this->db->query('select idUser, nomUser, statutUser from user where nomUser="'.$nomUser.'"');

        return $sql->result();
    }
}
