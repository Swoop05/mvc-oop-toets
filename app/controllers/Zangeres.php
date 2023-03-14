<?php

class Zangeres extends BaseController
{
    private $ZangeresModel;

    public function __construct()
    {
        $this->ZangeresModel = $this->model('ZangeresModel');
    }

    public function index()
    {
        $data = [
            'title' => 'Top 5 rijkste zangeressen ter wereld'
        ];

        $this->view('Zangeres/index', $data);
    }


    public function getZangeres($id1=NULL, $id2=NULL) 
    {
        $Zangeres = $this->ZangeresModel->getZangeres();

        $tableRows = "";
        foreach ($Zangeres as $value) {
            $tableRows .= "<tr>
                                <td>$value->Naam</td>
                                <td>$value->NettoWaarde</td>
                                <td>$value->Land</td>
                                <td>$value->Mobiel</td>
                                <td>$value->Leeftijd</td>
                           </tr>";
        }

        $data = [
            'title' => 'Top 5 rijkste zangeressen ter wereld',
            'tableRows' => $tableRows
        ];

        $this->view('Zangeres/getZangeres', $data);
    }
}