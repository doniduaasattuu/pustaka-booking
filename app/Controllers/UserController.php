<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\Request;
use CodeIgniter\HTTP\Response;

class UserController extends BaseController
{
    public function login()
    {
        return view('auth/login', [
            'title' => 'Login'
        ]);
    }

    public function doLogin()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $data = [
            'email' => $email,
            'password' => $password,
        ];

        return $this->response->setJSON($data);
    }
}
