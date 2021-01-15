<?php

namespace App\Controllers;

use App\Models\ModelOrderUser;

class OrderUser extends BaseController
{
    public function __construct()
    {
        Helper('form');
        $this->ModelOrderUser = new ModelOrderUser();
    }
    public function index()
    {
        $data = array(
            'title' => 'Your Order',
            'user'  => $this->ModelOrderUser->allData(),
            'isi'     => 'dashboard/orderuser'
        );
        return view('layout/wrapper', $data);
    }
    //--------------------------------------------------------------------

}
