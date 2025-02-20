<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class RateLimitFilter implements FilterInterface
{
    protected $maxAttempts = 5; // Maksimal percobaan
    protected $decayMinutes = 1; // Waktu reset dalam menit

    public function before(RequestInterface $request, $arguments = null)
    {
        $ipAddress = $request->getIPAddress();
        // $cacheKey = 'login_attempts_' . str_replace('.', '_', $ipAddress);
        $cacheKey = 'login_attempts_' . md5($ipAddress);
        // Ambil jumlah percobaan login dari cache
        $attempts = cache()->get($cacheKey) ?? 0;

        if ($attempts >= $this->maxAttempts) {
            return redirect()->to('/admin')->with('error', 'Terlalu banyak percobaan login. Silakan coba lagi nanti.');
        }

        // Increment attempts
        cache()->save($cacheKey, $attempts + 1, $this->decayMinutes * 60);
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tidak ada tindakan yang diperlukan setelah permintaan
    }
}