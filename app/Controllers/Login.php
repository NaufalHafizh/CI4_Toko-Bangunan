<?php

namespace App\Controllers;

use App\Models\User;

class Login extends BaseController
{
    public function __construct()
    {
        $this->User = new User();

        $this->validation = \Config\Services::validation();

        $this->session = \Config\Services::session();
    }

    public function index()
    {
        # code...

        $data = [

            'title' => "Toko Bangunan | Login"
        ];

        return view('v_login', $data);
    }

    public function loginAuth()
    {
        $data = $this->request->getVar();

        $User = $this->User->where('username', $data['username'])->first();

        if ($User) {
            # code...

            if ($User['password'] == $data['password']) {

                $loginSession = [

                    'Islogin' => true,
                    'username' => $User['username']
                ];

                $this->session->set($loginSession);
                return redirect('Home');
            } else {

                session()->setFlashdata('msg', 'Password Salah');
                return redirect('/');
            }
        } else {

            session()->setFlashdata('msg', 'Username Tidak Terdaftar');
            return redirect('/');
        }
    }

    public function logout()
    {

        session()->destroy();
        return redirect()->to('/');
    }
}
