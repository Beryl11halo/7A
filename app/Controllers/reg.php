<?php

namespace App\Controllers;

class reg extends BaseController
{

    public function signup()
    {
        $db = \Config\Database::connect();

        $data = 
        [
            'id' => '',
            'name' => $this->request->getPost('name'),
            'pass' => $this->request->getPost('password'),
            'email' => $this->request->getPost('email'),
            'role' => 'user',
            'is_active' => '1'
        ];

        $db->table('user')->insert($data);
        echo 'terkirim';
        return redirect()->to('/index');
    }
}
