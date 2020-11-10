<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonModel extends Model
{
    // protected $table = 'actor';
    // protected $primaryKey = 'id_actor';

    public function getActor()
    {
        // return $this->orderBy('actor_Birthday', 'ASC')->findAll();
        return $this->findAll();
    }

    public function getActorLimit()
    {
        return $this->findAll(6);
    }

    public function saveActorDB($saveData)
    {
        $query = $this->db->table($this->table)->insert($saveData);
        return $query;
    }

    public function getDirector()
    {
        $d = $this->db->table($this->tableDirector)->select('*')->get();
        return $d;
    }

    public function getWriter()
    {
        $table = 'writer';
        $primaryKey = 'id_writer';
        $w = $this->find();
        return $w;
    }
}
