<?php

namespace App\Models;

use CodeIgniter\Model;

class DramaModel extends Model
{

    protected $table = 'drama_info';
    protected $primaryKey = 'id_drama';

    public function getDrama()
    {
        return $this->findAll();
    }

    public function getDramaID($slug)
    {
        return $this->select('id_drama')->where(['slug' => $slug])->first();
    }

    // public function getCast($slug)
    // {
    //     $builder = $this->select('drama_v_actor.cast_as, drama_v_actor.role, drama_v_actor.cover, actor.actor_name, actor.slug')->join('drama_v_actor', 'drama_info.id_drama = drama_v_actor.id_drama', 'inner')->join('actor', 'actor.id_actor = drama_v_actor.id_actor')->where('drama_info.slug', $slug)->find();
    //     // $builder->join('drama_v_actor', 'drama_info.id_drama = drama_v_actor.id_drama', 'inner');
    //     // $builder->where('slug', $slug)->get();
    //     return $builder;
    // }

    public function saveDramaInfo($saveDramaInfo)
    {
        $query = $this->db->table($this->table)->insert($saveDramaInfo);
        return $query;
    }

    public function saveDramaDetail($saveDramaDetail)
    {
        $query = $this->db->table('drama_detail')->insert($saveDramaDetail);
        return $query;
    }

    public function saveReleaseInfo($saveReleaseInfo)
    {
        $query = $this->db->table('drama_release')->insert($saveReleaseInfo);
        return $query;
    }

    public function saveBroadcastInfo($saveBroadcastInfo)
    {
        $query = $this->db->table('drama_runtime')->insert($saveBroadcastInfo);
        return $query;
    }

    // public function getDramaDetail($slug = false)
    // {
    //     return $this->where(['slug' => $slug])->first();
    // }

    // public function saveCastDB($saveData)
    // {
    //     $query = $this->db->table('drama_v_actor')->insert($saveData);
    //     return $query;
    // }
}
