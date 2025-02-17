<?php

namespace App\Controllers;

use App\Models\UserTable;

class Home extends BaseController
{
    public function index(): string
    {

        // through querry selector

        // $db = \config\Database::connect();
        // $query = $db->table('usertable')->get();
        // $data['users'] = $query->getResult();

     //through model
     $usertable = new UserTable();
     $data['users'] = $usertable->findAll();




        return view('layout/mainLayout', $data);
    }

    public function editUser(){
        return view('pages/edit');
    }
}
