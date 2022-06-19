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

            'title' => "Toko Bangunan | Login",
        ];

        helper(['form']);

        return view('v_login', $data);
    }

    public function loginAuth()
    {
        $data = $this->request->getVar();

        $this->validation->run($data, 'login');
        $errors = $this->validation->getErrors();

        if ($errors) {
            session()->setFlashdata('error', $errors);
            return redirect()->to('/')->withInput();
        }

        $User = $this->User->where('username', $data['username'])->first();

        if ($User) {
            # code...

            if ($User['password'] == $data['password']) {

                $loginSession = [

                    'Islogin' => true,
                    'username' => $User['username']
                ];

                $this->session->set($loginSession);
                return redirect()->to('Home');
            } else {

                session()->setFlashdata('msg', 'Password Salah');
                return redirect()->to('/')->withInput();
            }
        } else {

            session()->setFlashdata('msg', 'Username Tidak Terdaftar');
            return redirect()->to('/');
        }
    }

    public function logout()
    {

        session()->destroy();
        return redirect()->to('/');
    }
}
