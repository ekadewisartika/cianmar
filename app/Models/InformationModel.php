<?php

namespace App\Models;

use CodeIgniter\Model;

class InformationModel extends Model
{
    protected $table            = 'informations'; // Sesuaikan dengan nama tabel
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    // Daftarkan field yang boleh diisi
    protected $allowedFields    = [
        'name', 
        'address', 
        'phone1', 
        'phone2', 
        'whatsapp', 
        'facebook', 
        'instagram', 
        'email', 
        'website', 
        'maps_link'
    ];

    // Aktifkan timestamps untuk created_at dan updated_at
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // ... (bagian lainnya tetap sama)


    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
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

    public function updateInformation($id, $data){
        return $this->update($id, $data);
    }

    public function createInformation($data){
        return $this->insert($data);
    }

    public function deleteInformation($id){
        return $this->delete($id);
    }
}
