<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'user_info';
    protected $primaryKey = 'id';

    protected $allowedFields = ['user_name', 'user_password'];
    protected $returnType    = 'array';
    protected $useTimestamps = true;
}
