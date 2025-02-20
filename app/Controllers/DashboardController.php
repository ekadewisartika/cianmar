<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard - Anmar Binawisata',
        ];
        return view('PanelAnmar/dashboard_view', $data);
    }
}
