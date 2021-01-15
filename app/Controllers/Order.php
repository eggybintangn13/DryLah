<?php

namespace App\Controllers;

use App\Models\ModelOrder;

class Order extends BaseController
{
    public function __construct()
    {
        Helper('form');
        $this->ModelOrder = new ModelOrder();
    }
    public function index()
    {
        $data = array(
            'title' => 'Order',
            'isi'     => 'dashboard/order'
        );
        return view('layout/wrapper', $data);
    }

    public function addreguler()
    {
        $data = [
            'id_user'   => session()->get('id_user'),
            'jenis'     => $this->request->getPost('jenis'),
            'berat'     => $this->request->getPost('berat'),
            'alamat'    => $this->request->getPost('alamat'),
            'paket'     => 1,
            'status'    => 1,


        ];
        $this->ModelOrder->add($data);
        session()->setFlashData('pesan', 'Order ditambahkan');
        return redirect()->to(base_url('order'));
    }

    public function addexpress()
    {
        $data = [
            'id_user'   => session()->get('id_user'),
            'jenis'     => $this->request->getPost('jenis'),
            'berat'     => $this->request->getPost('berat'),
            'alamat'    => $this->request->getPost('alamat'),
            'paket'     => 2,
            'status'    => 1
        ];
        $this->ModelOrder->add($data);
        session()->setFlashData('pesan', 'Order ditambahkan');
        return redirect()->to(base_url('order'));
    }

    //--------------------------------------------------------------------

}
