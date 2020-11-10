<?php

namespace App\Models;

use CodeIgniter\Model;

class NetworkModel extends Model
{
    protected $table = 'network_channel';
    protected $primaryKey = 'id_network';

    public function getNetwork()
    {
        return $this->findAll();
    }
}
