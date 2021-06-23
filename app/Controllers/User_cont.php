<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\User_model;
 
class User_cont extends Controller
{
    public function index()
    {
        $model = new User_model();
        $data['user'] = $model->getUser();
        echo view('User_view',$data);
    }

    public function add_new()
    {
        echo view('Add_user_view');
    }

    public function save()
    {
        $model = new User_model();
        $data = array(
            'Nama'  => $this->request->getPost('Nama'),
            'Tgl_Lahir' => $this->request->getPost('Tgl_Lahir'),
            'Alamat' => $this->request->getPost('Alamat'),
            'Telp' => $this->request->getPost('Telp'),
            'Status' => $this->request->getPost('Status'),
        );
        $model->saveUser($data);
        return redirect()->to('user_view');
    }
}