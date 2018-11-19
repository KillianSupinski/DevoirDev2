<?php

class ctrl_Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('view_Home');
    }

    public function load()
    {
        $this->load->model('Model_Connexion');
        $data = $this->Model_Connexion->Connexion($_GET['nomUser']);
        foreach ($data as $unId) {
            if ($unId->statutUser === 'admin') {
                $this->load->model('Model_Region');
                $data['lesRegions'] = $this->Model_Region->getAllRegion();
                $this->load->view('view_RegionA', $data);
            } else {
                $this->load->model('Model_Region');
                $data['laRegion'] = $this->Model_Region->getOneRegion();
                $this->load->view('view_RegionI', $data);
            }
        }
    }

    public function AfficherVille()
    {
        $this->load->model('Model_Ville');
        $data['lesVilles'] = $this->Model_Ville->getAllVille($_GET['idRegion']);
        $this->load->view('view_Ville', $data);
    }

    public function SetAllNote()
    {
        $this->load->model('Model_Note');
        $this->Model_Note->setNotes($_GET['idRegion']);
        $this->load->view('view_Home');
    }
}
