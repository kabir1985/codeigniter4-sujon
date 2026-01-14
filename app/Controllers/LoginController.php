<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class LoginController extends BaseController
{
    public function index(): string
    {
        return view('login/loginView');
    }


    public function attemptLogin()
    {
       // Validation rules
        $rules = [
            'user_name'     => 'required|valid_email',
            'user_password' => 'required|min_length[6]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('error', implode('<br>', $this->validator->getErrors()));
        }

        $user_name     = $this->request->getPost('user_name');
        $user_password = $this->request->getPost('user_password');

        echo $user_name;
        exit();

        $userModel = new UserModel();
        $user = $userModel->where('user_name', $user_name)->first();

        if (! $user || ! password_verify($user_password, $user['user_password'])) {
            return redirect()->back()->withInput()->with('error', 'Invalid email or password');
        }

        // Set session
        session()->set([
            'user_id'    => $user['id'],
            'user_name'  => $user['user_name'],
            'user_email' => $user['user_email'] ?? $user['user_name'],
            'logged_in'  => true,
        ]);

        return redirect()->to('/dashboard')->with('success', 'Login successful');

    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('success', 'Logged out successfully');
    }

}