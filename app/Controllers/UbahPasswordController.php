<?php

namespace App\Controllers;

use App\Models\UserModel; // Assuming you have a UserModel for user operations
use CodeIgniter\Controller;

class UbahPasswordController extends Controller
{
    public function index()
    {
        return view('PanelAnmar/ubahpassword_view');
    }
    public function change_password()
    {
        $session = session();
        $userModel = new UserModel();

        // Validate the input
        $validationRules = [
            'password' => 'required',
            'new_password' => 'required|min_length[6]',
            'confirm_password' => 'required|matches[new_password]',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Get the current user's data
        $uname = $session->get('username');
        $user = $userModel->findUserByUsername($uname);
        // Check if the old password is correct
        if (!password_verify($this->request->getPost('password'), $user['password'])) {
            return redirect()->back()->withInput()->with('error', 'Password lama salah.');
        }

        // Update the password
        $newPassword = password_hash($this->request->getPost('new_password'), PASSWORD_DEFAULT);
        $userModel->change_password($uname, $newPassword);

        return redirect()->to('/admin/ubah-password')->with('message', 'Password berhasil diperbarui.');
    }
}