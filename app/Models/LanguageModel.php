<?php

namespace App\Models;

use CodeIgniter\Model;

class LanguageModel extends Model
{
    protected $table = 'language';
    protected $primaryKey = 'id_language';

    public function getLanguage()
    {
        return $this->findAll();
    }
}
