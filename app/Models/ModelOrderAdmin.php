<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelOrderAdmin extends Model
{
    public function allData()
    {
        return $this->db->table('order')
            ->get()->getResultArray();
    }

    public function edit($data)
    {
        $this->db->table('order')
        ->where('id_order', $data['id_order'])
        ->update($data);
    }
}
