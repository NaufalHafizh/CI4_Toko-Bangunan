<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{

    protected $table = 'User';

    protected $allowedFields = [

        'username',
        'password'
    ];

    protected $useAutoIncrement = false;
}
