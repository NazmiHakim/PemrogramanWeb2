<?php namespace App\Controllers;

class Home extends BaseController
{
    public function beranda()
    {
        // Cek session login
        if(!session()->get('logged_in')){
            session()->setFlashdata('warning', 'Login terlebih dahulu!');
            return redirect()->to('/login');
        }

        echo view('templates/header');
        echo view('home/beranda');
        echo view('templates/footer');
    }
}