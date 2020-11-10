<?php

namespace App\Models;

use CodeIgniter\Model;

class DramaDetailModel extends Model
{

    protected $table = 'drama_detail';
    protected $primaryKey = 'id_ddetail';

    public function getDramaDetailID($id)
    {
        return $this->select('id_ddetail')->where(['id_drama' => $id])->first();
    }
}
