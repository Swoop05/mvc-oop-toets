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
            'title' => 'Overzicht landen van de wereld'
        ];

        $this->view('Zangeres/index', $data);
    }


    public function getZangeres($id1=NULL, $id2=NULL) 
    {
        $Zangeres = $this->ZangeresModel->getZangeres();

        $tableRows = "";
        foreach ($Zangeres as $value) {
            $tableRows .= "<tr>
                                <td>$value->Id</td>
                                <td>$value->Name</td>
                           </tr>";
        }

        $data = [
            'title' => 'Overzicht landen van Europa',
            'tableRows' => $tableRows
        ];

        $this->view('Zangeres/getZangeres', $data);
    }
}