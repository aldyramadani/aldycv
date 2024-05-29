<?php

namespace App\Models;

use CodeIgniter\Model;

class MyModels extends Model
{
    protected $table = 'aldycv';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'hp', 'email', 'addres', 'hello'];
}
