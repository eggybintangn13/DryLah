<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelOrderUser extends Model
{
    public function allData()
    {
        return $this->db->table('order')
            ->where('id_user', session()->get('id_user'))
            ->get()->getResultArray();
    }
}
