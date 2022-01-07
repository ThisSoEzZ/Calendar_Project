<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\RepairModel;


class User extends Controller
{
  
    public function index()
    {
        echo view('component/header');
        echo view('index');
        echo view('component/footer');


    }
    public function editprofile($Userid = null)
    {
        echo view('component/header');
        $UserModel = new UserModel();
        $Userdata['user'] = $UserModel->where('user_id', $Userid)->first();
        return view('Userpage/edit_profile', $Userdata);
    }

    public function editpassword($Userid = null)
    {
        echo view('component/header');
        $UserModel = new UserModel();
        $Userdata['user'] = $UserModel->where('user_id', $Userid)->first();
        return view('Userpage/user_chancepassword', $Userdata);
    }

    public function editprofileImage($Userid = null)
    {
        echo view('component/header');
        $UserModel = new UserModel();
        $Userdata['user'] = $UserModel->where('user_id', $Userid)->first();
        return view('Userpage/edit_profile_img', $Userdata);
    }
  
    public function updatePassword() {
        $UserModel = new UserModel();
        $id = $this->request->getVar('user_id');
        $data = [
            'user_password' => password_hash($this->request->getVar('user_password'), PASSWORD_DEFAULT),
        ];
        $UserModel->update($id, $data);
        return redirect()->to('/index.php/home/index')->with('profilesuccess', 'แก้ไขข้อมูลเสร็จสิ้น');
    }

    public function updateProfile($id)
    {
        $UserModel = new UserModel();
        $user_item = $UserModel->find($id);
        $old_img_name = $user_item['user_img'];

        $file = $this->request->getFile('user_img');
        if ($file->isValid() && !$file->hasMoved()) {
            if (file_exists("uploads/ImageUser/" . $old_img_name)) {
                unlink("uploads/ImageUser/" . $old_img_name);
            }
            $imageName = $file->getRandomName();
            $file->move('uploads/ImageUser/', $imageName);
        } else {
            $imageName = $old_img_name;
        }
        
        $data = [
            'user_title' => $this->request->getVar('user_title'),
            'user_name' => $this->request->getVar('user_name'),
            'user_lastname' => $this->request->getVar('user_lastname'),
            'user_email' => $this->request->getVar('user_email'),
            'user_phone' => $this->request->getVar('user_phone'),
            // 'user_password' => password_hash($this->request->getVar('user_password'), PASSWORD_DEFAULT),
            'user_img' => $imageName
        ];

        $UserModel->update($id, $data);
        return redirect()->to('/index.php/home/index')->with('profilesuccess', 'แก้ไขข้อมูลเสร็จสิ้น');
    }

   

    

}
