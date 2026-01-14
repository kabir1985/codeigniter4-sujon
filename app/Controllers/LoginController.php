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
        $validation = \Config\Services::validation();

        $rules = [
            'user_name'    => 'required|valid_email',
            'user_password' => 'required|min_length[6]',
        ];

        // if (! $this->validate($rules)) {
        //     return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        // }

        $user_name    = $this->request->getPost('user_name');
        $user_password = $this->request->getPost('user_password');

        echo $user_name;
        exit('sdfdsfdsfdsfs');


        $userModel = new UserModel();
        $row = $userModel->where('user_name', $user_name)->first();

        if (! $row) {
            return redirect()->back()->with('error', 'Invalid email or password');
        }

        if (! password_verify($user_password, $row['user_password'])) {
            return redirect()->back()->with('error', 'Invalid email or password');
        }

        session()->set([
            'user_id'   => $row['id'],
            'user_name' => $row['name'],
            'user_email'=> $row['email'],
            'logged_in' => true,
        ]);

        return redirect()->to('/dashboard')->with('success', 'Login successful');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('success', 'Logged out successfully');
    }

}