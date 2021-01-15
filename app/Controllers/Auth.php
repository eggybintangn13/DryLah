<?php

namespace App\Controllers;

use App\Models\ModelAuth;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelAuth = new ModelAuth();
    }

    public function register()
    {
        $data = array(
            'title' => 'Daftar',
        );
        return view('register', $data);
    }

    public function save_register()
    {
        if ($this->validate([
            'nama_user' => [
                'label' => 'Nama User',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi dan tidak boleh kosong'
                ]
            ],
            'email' => [
                'label' => 'E-Mail',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi dan tidak boleh kosong'
                ]
            ],
            'no_hp' => [
                'label' => 'No Handphone',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi dan tidak boleh kosong'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi dan tidak boleh kosong'
                ]
            ],
            'repassword' => [
                'label' => 'Konfirmasi Password',
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required'  => '{field} wajib diisi dan tidak boleh kosong',
                    'matches'   => '{field} Tidak Sama'
                ]
            ]
        ])) {
            $data = array(
                'nama_user'     => $this->request->getPost('nama_user'),
                'email'         => $this->request->getPost('email'),
                'no_hp'         => $this->request->getPost('no_hp'),
                'password'      => $this->request->getPost('password'),
                'level'         => 3,
                'foto_user'     => "user.png"
            );
            $this->ModelAuth->save_register($data);
            session()->setFlashdata('pesan', 'Pendaftaran Berhasil');
            return redirect()->to(base_url('Auth/register'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Auth/register'));
        }
    }

    public function login()
    {
        $data = array(
            'title' => 'Masuk',
        );
        return view('login', $data);
    }

    public function cek_login()
    {
        if ($this->validate([
            'email' => [
                'label' => 'E-Mail',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi dan tidak boleh kosong'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi dan tidak boleh kosong'
                ]
            ],
        ])) {
            //jika valid
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $cek = $this->ModelAuth->login($email, $password);
            if ($cek) {
                //jika data cocok
                session()->set('log', true);
                session()->set('id_user', $cek['id_user']);
                session()->set('nama_user', $cek['nama_user']);
                session()->set('email', $cek['email']);
                session()->set('level', $cek['level']);
                session()->set('foto_user', $cek['foto_user']);

                return redirect()->to(base_url('home'));
            } else {
                session()->setFlashdata('pesan', 'Login Gagal, Username atau password salah');
                return redirect()->to(base_url('Auth/login'));
            }
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Auth/login'));
        }
    }

    public function logout()
    {
        session()->remove('log');
        session()->remove('id_user');
        session()->remove('nama_user');
        session()->remove('email');
        session()->remove('level');
        session()->remove('foto_user');
        session()->setFlashdata('pesan', 'Logout Berhasil');
        return redirect()->to(base_url('auth/login'));
    }


    //--------------------------------------------------------------------

}
