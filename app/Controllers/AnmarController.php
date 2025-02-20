<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PaketModel;
use App\Models\InformationModel;

class AnmarController extends BaseController
{
    protected $paketModel;
    protected $informationModel;

    public function __construct()
    {
        $this->paketModel = new PaketModel();
        $this->informationModel = new InformationModel();
    }

    public function index()
    {
        return view('splash');
    }

    public function home()
    {
        $packages = $this->paketModel->getPackagesByStatus('active', 'created_at', 'DESC');
        if (!$packages) {
            $packages = []; // Default to empty array if no packages found
        }
        $data = [
            'title' => 'Home - Anmar Binawisata',
            'packages' => $packages
        ];
        return view('home', ['data' => $data]);
    }

    protected function getInformationData($title)
    {
        $information = $this->informationModel->first();
        return [
            'title' => $title,
            'information' => $information
        ];
    }

    public function tentang()
    {
        $data = $this->getInformationData('Tentang - Anmar Binawisata');
        return view('tentang', $data);
    }

    public function legalitas()
    {
        $data = $this->getInformationData('Legalitas - Anmar Binawisata');
        return view('legalitas', ['data' => $data]);
    }

    public function layanan()
    {
        $data = $this->getInformationData('Layanan - Anmar Binawisata');
        return view('layanan', ['data' => $data]);
    }

    public function paket()
    {
        $data = $this->getInformationData('Paket - Anmar Binawisata');
        return view('paket', ['data' => $data]);
    }

    public function rekening()
    {
        $data = $this->getInformationData('Rekening - Anmar Binawisata');
        return view('rekening', ['data' => $data]);
    }

    public function kontak()
    {
        $data = $this->getInformationData('Kontak - Anmar Binawisata');
        return view('kontak', ['data' => $data]);
    }

    public function kantor()
    {
        $data = $this->getInformationData('Kantor - Anmar Binawisata');
        return view('kantor', ['data' => $data]);
    }

    public function sambutan()
    {
        $data = $this->getInformationData('Sambutan - Anmar Binawisata');
        return view('sambutan', ['data' => $data]);
    }

    public function galeri()
    {
        $data = $this->getInformationData('Galeri - Anmar Binawisata');
        return view('galeri', $data);
    }
}