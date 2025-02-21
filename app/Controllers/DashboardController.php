<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PaketModel;

class DashboardController extends BaseController
{
    public function index()
    {
        //count paket
        $paketModel = model(PaketModel::class);
        $paketCount = $paketModel->countAll();
        $activeCount = $paketModel->countAllByStatus('active');
        $inactiveCount = $paketModel->countAllByStatus('inactive');

        $data = [
            'title' => 'Dashboard - Anmar Binawisata',
            'paket_count' => $paketCount,
            'active_count' => $activeCount,
            'inactive_count' => $inactiveCount,
        ];
        return view('PanelAnmar/dashboard_view', ['data' => $data]);
    }
}
