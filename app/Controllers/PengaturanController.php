<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\InformationModel;

class PengaturanController extends BaseController
{
    protected $informationModel;

    public function __construct()
    {
        $this->informationModel = new InformationModel();
    }

    public function index()
    {
        // Ambil data pengaturan dari database
        $data['settings'] = $this->informationModel->first();

        return view('PanelAnmar/pengaturan_view', $data);
    }

    public function update()
    {
        // Validasi input
        $validationRules = [
            'name' => 'required|min_length[3]|max_length[50]',
            'address' => 'required|max_length[255]',
            'phone1' => 'required|max_length[12]',
            'phone2' => 'permit_empty|max_length[12]',
            'whatsapp' => 'required|max_length[12]',
            'facebook' => 'permit_empty|max_length[255]',
            'instagram' => 'permit_empty|max_length[255]',
            'email' => 'required|valid_email|max_length[255]',
            'maps_link' => 'permit_empty',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Siapkan data untuk update
        $data = [
            'name' => esc($this->request->getPost('name')),
            'address' => esc($this->request->getPost('address')),
            'phone1' => esc($this->request->getPost('phone1')),
            'phone2' => esc($this->request->getPost('phone2')),
            'whatsapp' => esc($this->request->getPost('whatsapp')),
            'facebook' => esc($this->request->getPost('facebook')),
            'instagram' => esc($this->request->getPost('instagram')),
            'email' => esc($this->request->getPost('email')),
            'maps_link' => esc($this->request->getPost('maps_link')),
        ];

        // Update data
        $id = 1; // Asumsi hanya ada satu data pengaturan
        if ($this->informationModel->updateInformation($id, $data)) {
            return redirect()->to('/admin/pengaturan')->with('message', 'Pengaturan berhasil diperbarui!');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui pengaturan.');
        }
    }
}