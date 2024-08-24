<?php namespace App\Controllers;

use App\Models\BarangModel;
use CodeIgniter\Controller;

class BarangController extends Controller
{
    private $BarangModel;

    public function __construct() {
        $this->barangModel = new BarangModel();

    }

    public function index() {
        $data['barang'] = $this->barangModel->findAll();
        return view('barang', $data);
        //$fileGambar = $this->request->getFile('gambar');
        //$fileGambar->move('img');
        //$namaGambar=$fileGambar->getName();
    }


    public function create() {
        return view('create_barang');
    }

    public function store() {
        $data = $this->request->getPost();
        $this->barangModel->save($data);
        return redirect()->to('/admin');
    }



public function edit($id) {
    $db = \Config\Database::connect();
    $builder = $db->table('barang');
    $query = $builder->getWhere(['id' => $id]);
    $data['post'] = $query->getRowArray();


        $data['barang'] = $this->barangModel->find($id);
        return view('edit_barang', $data);
    }

    public function update($id) {
        $data = $this->request->getPost();
        $this->barangModel->update($id, $data);
        return redirect()->to('/admin');
    }

    public function delete($id) {
        $this->barangModel->delete($id);
        return redirect()->to('/admin');
    }
   


    public function barang_store()
    {
        $file = $this->request->getFile('file');

        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(FCPATH . 'gambar', $newName);

            // Simpan nama file di database
            $data = [
                'nama' => $this->request->getPost('nama'),
                'harga' => $this->request->getPost('harga'),
                'keterangan' => $this->request->getPost('keterangan'),
                'gambar' => $newName
            ];

            $db = \Config\Database::connect();
            $builder = $db->table('barang');
            $builder->insert($data);

            // Menyimpan nama file di session untuk ditampilkan di halaman upload_success
            session()->setFlashdata('uploaded_file', $newName);

            return redirect()->to('/admin');
        } else {
            return redirect()->back()->with('error', 'File upload failed');
        }
    }

    public function upload_success()
    {
        // Tambahkan ini untuk debugging
        echo "Reached upload_success method";
        dd(session()->getFlashdata('uploaded_file'));

        $data = [
            'fileName' => session()->getFlashdata('uploaded_file')
        ];

        return view('upload_success', $data);
    }


    
    
}



