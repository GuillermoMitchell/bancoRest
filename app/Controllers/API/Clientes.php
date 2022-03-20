<?php namespace App\Controllers\API;

use App\Models\ClienteModel;
use CodeIgniter\RESTful\ResourceController;

class Clientes extends ResourceController
{
    public function _construct() {
$this->model =$this -> setModel(new ClienteModel());
    }

    public function index()
    {
       $clientes = $this->model->findAll();
       return $this->respond($clientes);
    }
}
