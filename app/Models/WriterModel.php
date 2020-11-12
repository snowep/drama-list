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

    public function getDramaWriter($slug)
    {
        return $this->join('drama_v_writer', 'writer.id_writer = drama_v_writer.id_writer')->join('drama_info', 'drama_info.id_drama = drama_v_writer.id_drama')->where('drama_info.slug', $slug)->findAll();
    }
    public function getDramaWriterCount($slug)
    {
        return $this->select('count(*) as rowCount')->join('drama_v_writer', 'writer.id_writer = drama_v_writer.id_writer')->join('drama_info', 'drama_info.id_drama = drama_v_writer.id_drama')->where('drama_info.slug', $slug)->first();
    }
}
