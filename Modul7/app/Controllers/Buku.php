<?php namespace App\Controllers;

use App\Models\BukuModel;

class Buku extends BaseController
{
    protected $bukuModel;

    public function __construct()
    {
        $this->bukuModel = new BukuModel();
    }

    private function checkLogin()
    {
        if (!session()->get('logged_in')) {
            session()->setFlashdata('warning', 'Login terlebih dahulu!');
            return redirect()->to('/login')->send();
        }
    }

    public function index()
    {
        $this->checkLogin();

        $data['buku'] = $this->bukuModel->findAll();

        echo view('templates/header');
        echo view('buku/index', $data);
        echo view('templates/footer');
    }

    public function create()
    {
        $this->checkLogin();

        helper(['form']);

        echo view('templates/header');
        echo view('buku/create');
        echo view('templates/footer');
    }

    public function store()
    {
        $this->checkLogin();

        helper(['form']);
        $rules = [
            'judul' => [
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'Judul harus diisi.',
                    'string'   => 'Judul harus berupa teks.'
                ]
            ],
            'penulis' => [
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'Penulis harus diisi.',
                    'string'   => 'Penulis harus berupa teks.'
                ]
            ],
            'penerbit' => [
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'Penerbit harus diisi.',
                    'string'   => 'Penerbit harus berupa teks.'
                ]
            ],
            'tahun_terbit' => [
                'rules' => 'required|integer|greater_than[1800]|less_than[2024]',
                'errors' => [
                    'required' => 'Tahun terbit harus diisi.',
                    'integer'  => 'Tahun terbit harus berupa angka.',
                    'greater_than' => 'Tahun terbit harus lebih besar dari 1800.',
                    'less_than' => 'Tahun terbit harus kurang dari 2024.'
                ]
            ],
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->bukuModel->save([
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ]);

        return redirect()->to('/buku')->with('success', 'Data buku berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $this->checkLogin();

        $data['buku'] = $this->bukuModel->find($id);

        echo view('templates/header');
        echo view('buku/edit', $data);
        echo view('templates/footer');
    }

    public function update($id)
    {
        $this->checkLogin();

        $rules = [
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'tahun_terbit' => 'required|integer|greater_than[1800]|less_than[2024]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->bukuModel->update($id, [
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ]);

        return redirect()->to('/buku')->with('success', 'Data buku berhasil diubah.');
    }

    public function delete($id)
    {
        $this->checkLogin();

        $this->bukuModel->delete($id);
        return redirect()->to('/buku')->with('success', 'Data buku berhasil dihapus.');
    }
}