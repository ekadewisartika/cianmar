<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class LoginController extends BaseController
{
    protected $UserModel;

    public function __construct()
    {
        $this->UserModel = new UserModel();
    }

    public function index() 
    {
        // Redirect to dashboard if already logged in
        if (session()->get('is_logged_in')) {
            return redirect()->to('/admin/dashboard');
        }

        return view('PanelAnmar/login_view');
    }

    public function login()
    {
        // CSRF Protection
        if (!$this->validate(['csrf_test_name' => 'required'])) {
            return redirect()->to('/admin')->with('error', 'Invalid CSRF token');
        }

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Validate input
        if ($this->isInvalidCredentials($username, $password)) {
            return redirect()->to('/admin')->with('error', 'Username atau password tidak boleh kosong');
        }

        $user = $this->UserModel->findUserByUsername($username);

        if ($this->isValidUser($user, $password)) {
            // Regenerate session ID to prevent session fixation
            session()->regenerate();

            session()->set([
                'is_logged_in' => true,
                'username'     => $user['username'],
            ]);

            // Log successful login attempt
            log_message('info', 'User ' . $username . ' logged in successfully.');

            return redirect()->to('/admin/dashboard')->with('success', 'Login berhasil');
        } else {
            // Log failed login attempt
            log_message('error', 'Failed login attempt for username: ' . $username);
            return redirect()->to('/admin')->with('error', 'Username atau password salah');
        }
    }

    private function isInvalidCredentials($username, $password)
    {
        return empty($username) || empty($password);
    }

    private function isValidUser($user, $password)
    {
        return $user && password_verify($password, $user['password']);
    }

    public function logout()
    {
        // Log logout action
        log_message('info', 'User ' . session()->get('username') . ' logged out.');

        session()->destroy();
        return redirect()->to('/admin')->with('success', 'Anda telah berhasil logout');
    }
}