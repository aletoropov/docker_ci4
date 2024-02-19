<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    public function index()
    {
        $data['title'] = ucfirst('user controller');

        return view('common/header', $data)
            .view('user/index')
            .view('common/footer');
    }
}
