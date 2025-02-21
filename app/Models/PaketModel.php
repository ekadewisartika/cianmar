<?php

namespace App\Models;

use CodeIgniter\Model;

class PaketModel extends Model
{
    protected $table            = 'packages';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'name', 'status', 'image', 'created_at', 'updated_at'
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true; // Aktifkan timestamps
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules = [
        'name' => 'required|min_length[3]|max_length[255]',
        'status' => 'required|in_list[active,inactive]',
        'image' => 'permit_empty|max_length[255]',
    ];

    protected $validationMessages = [
        'name' => [
            'required' => 'Nama paket wajib diisi.',
            'min_length' => 'Nama paket minimal 3 karakter.',
            'max_length' => 'Nama paket maksimal 255 karakter.',
        ],
        'status' => [
            'required' => 'Status wajib diisi.',
            'in_list' => 'Status harus active atau inactive.',
        ],
        'image' => [
            'max_length' => 'Nama file gambar terlalu panjang.',
        ],
    ];

    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getPackages()
    {
        return $this->select('id, name, status, image, created_at')
                    ->orderBy('created_at', 'DESC')
                    ->findAll();
    }

    public function getPackage($id = null)
    {
        return $this->where('id', $id)->first();
    }

    public function getPackagesByStatus($status = 'active', $orderBy = 'created_at', $direction = 'DESC')
    {
        if (!in_array($status, ['active', 'inactive'])) {
            throw new \InvalidArgumentException('Status tidak valid.');
        }
        return $this->where('status', $status)->orderBy($orderBy, $direction)->findAll();
    }

    public function createPackage(array $data)
    {
        try {
            return $this->insert($data);
        } catch (\Exception $e) {
            log_message('error', 'Gagal menyimpan paket: ' . $e->getMessage());
            return false;
        }
    }

    public function updatePackage($id = null, array $data)
    {
        try {
            return $this->update($id, $data);
        } catch (\Exception $e) {
            log_message('error', 'Gagal memperbarui paket: ' . $e->getMessage());
            return false;
        }
    }

    public function deletePackage($id = null)
    {
        try {
            return $this->delete($id);
        } catch (\Exception $e) {
            log_message('error', 'Gagal menghapus paket: ' . $e->getMessage());
            return false;
        }
    }

    public function countAll()
    {
        return $this->countAllResults();
    }

    public function countAllByStatus($status = 'active')
    {
        return $this->where('status', $status)->countAllResults();
    }

}