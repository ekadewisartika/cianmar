<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PaketModel;

class PaketController extends BaseController
{
    protected $paketModel;

    public function __construct()
    {
        $this->paketModel = new PaketModel();
    }
    
    public function index()
    {
        $packages = $this->paketModel->getPackages();
        $data = [
            'title' => 'Paket - Anmar Binawisata',
        ];

        return view('PanelAnmar/paketwisata_view', [
            'data' => $data,
            'paket' => $packages,
        ]);
    }

    public function create()
    {
        $data = [
            'title' => 'Create Paket - Anmar Binawisata',
        ];
        return view('PanelAnmar/paketwisata_create_view', $data);
    }

    public function edit($id)
    {
        // Ambil ID dari URL (segment ke-4)
        $id = $this->request->getUri()->getSegment(4);

        // Validasi ID
        if (!is_numeric($id)) {
            return redirect()->to('/admin/paket')->with('error', 'ID paket tidak valid.');
        }

        // Ambil data paket dari database
        $package = $this->paketModel->getPackage($id);

        // Jika paket tidak ditemukan
        if (!$package) {
            return redirect()->to('/admin/paket')->with('error', 'Paket tidak ditemukan.');
        }

        // Siapkan data untuk view
        $data = [
            'title' => 'Edit Paket - Anmar Binawisata',
            'paket' => $package, // Kirim data paket ke view
        ];

        // Tampilkan view
        return view('PanelAnmar/paketwisata_edit_view', $data);
    }

    public function save()
    {
        // Validasi input
        $validationRules = [
            'name' => 'required|min_length[3]|max_length[255]',
            'status' => 'required|in_list[active,inactive]',
            'image' => 'uploaded[image]|max_size[image,2048]|is_image[image]',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Handle image upload
        $imageFile = $this->request->getFile('image');
        if ($imageFile->isValid() && !$imageFile->hasMoved()) {
            $newName = $imageFile->getRandomName(); // Generate nama file acak
            $imageFile->move('assets/uploads/paket', $newName); // Simpan file ke direktori uploads/paket
            $image = $newName; // Simpan nama file ke database
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal mengunggah gambar.');
        }

        // Siapkan data untuk disimpan
        $data = [
            'name' => esc($this->request->getPost('name')), // Escaping input untuk keamanan
            'status' => esc($this->request->getPost('status')),
            'image' => $image,
        ];

        // Simpan data ke database
        if ($this->paketModel->createPackage($data)) {
            return redirect()->to('/admin/paket')->with('message', 'Paket berhasil disimpan.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal menyimpan paket.');
        }
    }

    public function update($id)
{
    // Validasi input
    $validationRules = [
        'name' => 'required|min_length[3]|max_length[255]',
        'status' => 'required|in_list[active,inactive]',
        'image' => 'permit_empty|max_size[image,2048]|is_image[image]', // Gambar opsional
    ];

    if (!$this->validate($validationRules)) {
        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }

    // Handle image upload (jika ada file gambar yang diunggah)
    $imageFile = $this->request->getFile('image');
    $image = null;

    if ($imageFile && $imageFile->isValid() && !$imageFile->hasMoved()) {
        $newName = $imageFile->getRandomName(); // Generate nama file acak
        $imageFile->move('assets/uploads/paket', $newName); // Simpan file ke direktori uploads/paket
        $image = $newName; // Simpan nama file ke database
    }

    // Siapkan data untuk disimpan
    $data = [
        'name' => esc($this->request->getPost('name')), // Escaping input untuk keamanan
        'status' => esc($this->request->getPost('status')),
    ];

    // Jika ada gambar baru, tambahkan ke data
    if ($image) {
        $data['image'] = $image;
    }

    // Simpan data ke database
    if ($this->paketModel->updatePackage($id, $data)) {
        return redirect()->to('/admin/paket')->with('message', 'Paket berhasil diperbarui.');
    } else {
        return redirect()->back()->withInput()->with('error', 'Gagal memperbarui paket.');
    }
}

    public function delete($id)
    {
        // Cek apakah paket dengan ID tersebut ada
        if (!$this->paketModel->find($id)) {
            return redirect()->back()->with('error', 'Paket tidak ditemukan.');
        }

        // Hapus paket
        if ($this->paketModel->deletePackage($id)) {
            return redirect()->to('/admin/paket')->with('message', 'Paket berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Gagal menghapus paket.');
        }
    }
}