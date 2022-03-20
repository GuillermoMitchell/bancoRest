<?php namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model
{
protected $tableName = 'cliente';
protected $primaryKey ='id';

protected $returnType = 'array';
protected $allowedFields = ['nombre','apellido','telefono','correo'];

protected $useTimestamps = true;
protected $createdfield = 'created_at';
protected $updatedfield = 'created_at';

protected $validationRules = [
'nombre'  => 'required|alpha_space|min_length[3]|max_length[75]',
'apellido' => 'required|alpha_space|min_length[3]|max_length[75]',
'telefono'  => 'required|alpha_space|min_length[8]|max_length[8]',
'correo' => 'permit_empty|valid_email|ma_length[85]',

];

protected $validationMessages =[
'correo'  =>[
    'valid_email'  =>'estimado usuario, debe ingresar un emailvalido'

]
];
protected $skipValidation =false;


}