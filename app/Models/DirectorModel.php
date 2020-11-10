<?php

namespace App\Models;

use CodeIgniter\Model;

class DirectorModel extends Model
{
    protected $table = 'director';
    protected $primaryKey = 'id_director';

    public function getDirector()
    {
        return $this->findAll();
    }
}
