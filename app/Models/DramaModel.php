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

    public function getCast($slug)
    {
        $builder = $this->select('drama_v_actor.cast_as, drama_v_actor.role, drama_v_actor.cover, actor.actor_name, actor.slug')->join('drama_v_actor', 'drama_info.id_drama = drama_v_actor.id_drama', 'inner')->join('actor', 'actor.id_actor = drama_v_actor.id_actor')->where('drama_info.slug', $slug)->find();
        return $builder;
    }

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

    public function dramaWriterSave($dramaWriterData)
    {
        return $this->db->table('drama_v_writer')->insert($dramaWriterData);
    }

    public function getDramaDetail($slug = false)
    {
        return $this->select('
        drama_info.id_drama, drama_info.cover, drama_info.primary_title, drama_info.secondary_title, drama_info.hangeul, drama_info.rev_romanization, drama_info.slug,
        drama_detail.episode, drama_detail.synopsis,
        director.director_name,
        network_channel.company_name,
        drama_release.release_date, drama_release.end_date,
        drama_runtime.odd_ep, drama_runtime.even_ep, drama_runtime.broadcast_time,
        country.country,
        language.language')
            ->join('drama_detail', 'drama_info.id_drama = drama_detail.id_drama')
            ->join('director', 'drama_detail.id_director = director.id_director')
            ->join('network_channel', 'network_channel.id_network = drama_detail.id_network')
            ->join('drama_release', 'drama_release.id_ddetail = drama_detail.id_ddetail')
            ->join('drama_runtime', 'drama_runtime.id_ddetail = drama_detail.id_ddetail')
            ->join('country', 'country.id_country = drama_detail.id_country')
            ->join('language', 'language.id_language = drama_detail.id_language')
            ->where('drama_info.slug', $slug)->first();
    }
}
