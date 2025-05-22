<?php namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        helper(['form']);
        echo view('templates/header');
        echo view('auth/login');
        echo view('templates/footer');
    }

    public function processLogin()
    {
        helper(['form']);
        $session = session();
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $userModel->where('username', $username)->first();

        if($user){
            if(password_verify($password, $user['password'])){
                $sessionData = [
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'logged_in' => TRUE,
                ];
                $session->set($sessionData);
                return redirect()->to('/beranda');
            } else {
                $session->setFlashdata('error', 'Password salah!');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('error', 'Username tidak ditemukan!');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}