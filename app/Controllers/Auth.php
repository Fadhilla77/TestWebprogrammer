<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        // Load your login view
        return view('auth/login');
    }

    public function loginAttempt()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            $session = session();
            $userData = [
                'user_id' => $user['id'],
                'username' => $user['username'],
                'logged_in' => true,
            ];
            $session->set($userData);

            return redirect()->to('/products');
        } else {
            return redirect()->to('auth/login')->with('error', 'Invalid username or password');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        
        return redirect()->to('auth/login');
    }

    public function processLogin()
    {
        return 'Login Attempted';
    }
}