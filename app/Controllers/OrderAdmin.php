<?php

namespace App\Controllers;

use App\Models\ModelOrderAdmin;

class OrderAdmin extends BaseController
{
    public function __construct()
    {
        Helper('form');
        $this->ModelOrderAdmin = new ModelOrderAdmin();
    }
    public function index()
    {
        $data = array(
            'title' => 'List Order',
            'user'  => $this->ModelOrderAdmin->allData(),
            'isi'     => 'dashboard/orderadmin'
        );
        return view('layout/wrapper', $data);
    }

    public function edit($id_order)
    {
        $data = [
            'id_order'   => $id_order,
            'status'     => $this->request->getPost('status'),
        ];
        $this->ModelOrderAdmin->edit($data);
        session()->setFlashData('pesan', 'Data Berhasil Update');
        return redirect()->to(base_url('orderadmin'));
    }
    //--------------------------------------------------------------------

}
