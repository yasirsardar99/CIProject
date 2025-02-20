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

    public function editUser($id){

       

        $usertable = new UserTable();
     $data['userdata'] = $usertable->where('id', $id)->first();



        return view('pages/edit', $data);
    }

    public function create(){
        return view('pages/create');
    }

    public function store(){
        // echo "storing user";

        $user = new UserTable();

        $password = $this->request->getPost('password');
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => $hashPassword,
        ];

        $user->insert($data);

        // session message
        session()->setFlashdata('message', 'user added Successfully!');
        return redirect()->to('/');
    }

    public function update($id){
        // echo "storing user";

        $user = new UserTable();

       
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            
        ];

        $user->update( $id, $data);

        // session message
        session()->setFlashdata('message', 'user Updated Successfully!');
        return redirect()->to('/');
    }

    public function delete($id){
            $user = new UserTable();
            $user->delete($id);
            session()->setFlashdata('message', 'user deleted Successfully!');
            return redirect()->to('/');


    }
}
