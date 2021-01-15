<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelOrder extends Model
{

    public function add($data)
    {
        // return $this->db->table('order')
        //     // ->join('tbl_user','tbl_user.id_user=order.id_user')
        //     ->join('order', 'order.id_user=tbl_user.id_user');
        $this->db->table('order')->insert($data);
    }
}
