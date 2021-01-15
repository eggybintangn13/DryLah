<?php 

namespace App\Controllers;
use App\Models\ModelUser;

class User extends BaseController
{
    public function __construct()
    {
        Helper('form');
        $this->ModelUser = new ModelUser();
    }
	public function index()
	{
		$data = array(
            'title' => 'List User',
            'user'  => $this->ModelUser->allData(),
			'isi' 	=> 'dashboard/user'
		);
		return view('layout/wrapper',$data);
    }
    
    public function add()
    {
        $data = [
            'nama_user'     => $this->request->getPost('nama_user'),
            'email'         => $this->request->getPost('email'),
            'no_hp'         => $this->request->getPost('no_hp'),
            'password'      => 'default',
            'level'         => 3
        ];
        $this->ModelUser->add($data);
        session()->setFlashData('pesan', 'Data Berhasil ditambahkan');
        return redirect()->to(base_url('user'));
    }

    public function edit($id_user)
    {
        $data = [
            'id_user'   => $id_user,
            'nama_user'     => $this->request->getPost('nama_user'),
            'level'         => $this->request->getPost('level'),
        ];
        $this->ModelUser->edit($data);
        session()->setFlashData('pesan', 'Data Berhasil Update');
        return redirect()->to(base_url('user'));
    }

    public function delete($id_user)
    {
        $data = [
            'id_user'   => $id_user,
        ];
        $this->ModelUser->delete_data($data);
        session()->setFlashData('pesan', 'Data Berhasil dihapus');
        return redirect()->to(base_url('user'));
    }

	//--------------------------------------------------------------------

}
