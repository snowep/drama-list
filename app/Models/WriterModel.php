<?php

namespace App\Models;

use CodeIgniter\Model;

class WriterModel extends Model
{
    protected $table = 'writer';
    protected $primaryKey = 'id_writer';

    public function getWriter()
    {
        return $this->findAll();
    }
}
