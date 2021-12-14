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
    // update name data
    // public function updateProfile()
    // {
    //     $UserModel = new UserModel();
    //     $id = $this->request->getVar('user_id');

    //     // $file = $this->request->getFile('img');
    //     // if($file->isValid() && ! $file->hasMoved())
    //     // {
    //     //          $imageName = $file->getRandomName();
    //     //          $file->move('uploads/',$imageName);
    //     // }

    //     $data = [
    //         'user_title' => $this->request->getVar('user_title'),
    //         'user_name' => $this->request->getVar('user_name'),
    //         'user_lastname' => $this->request->getVar('user_lastname'),
    //         'user_email' => $this->request->getVar('user_email'),
    //         'user_phone' => $this->request->getVar('user_phone'),
    //         'user_img' => $this->request->getVar('user_img'),
    //     ];

    //     $UserModel->update($id, $data);
    //     return redirect()->to('/index.php/home/index')->with('profilesuccess', 'แก้ไขข้อมูลเสร็จสิ้น');
    // }
    public function updatePassword() {
        $UserModel = new UserModel();
        $id = $this->request->getVar('user_id');
        $data = [
            'user_password' => password_hash($this->request->getVar('user_password'), PASSWORD_DEFAULT),
        ];
        $UserModel->update($id, $data);
        return redirect()->to('/index.php/home/index')->with('profilesuccess', 'แก้ไขข้อมูลเสร็จสิ้น');
    }

    public function updateProfile2($id)
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

    public function Getidrepair($id = null)
    {
        echo view('component/header');
        $RepairModel = new RepairModel();
        $data['repair'] = $RepairModel->where('user_id', $id)->findAll();
        return view('Userpage/user_detail_repair', $data);
        
    }

    public function GetidDetailrepair($id = null)
    {
        echo view('component/header');
        $RepairModel = new RepairModel();
        $data['repair'] = $RepairModel->where('case_id', $id)->first();
        return view('Userpage/User_detail_id_repair', $data);
    }

    public function GetEditRepair($id = null)
    {
        echo view('component/header');
        $RepairModel = new RepairModel();
        $data['repair'] = $RepairModel->where('case_id', $id)->first();
        return view('Userpage/user_deatil_edit_repair', $data);
        
    }

    public function update_user_detail_case($id)
    {
        $RepairModel = new RepairModel();
        $user_item = $RepairModel->find($id);
        $old_img_name = $user_item['case_img'];

        $file = $this->request->getFile('case_img');
        if ($file->isValid() && !$file->hasMoved()) {
            if (file_exists("uploads/Imagecase/" . $old_img_name)) {
                unlink("uploads/Imagecase/" . $old_img_name);
            }
            $imageName = $file->getRandomName();
            $file->move('uploads/Imagecase/', $imageName);
        } else {
            $imageName = $old_img_name;
        }
        $data = [
            'user_id' => $this->request->getVar('user_id'),
            'user_name' => $this->request->getVar('user_name'),
            'case_type' => $this->request->getVar('case_type'),
            'user_email' => $this->request->getVar('user_email'),
            'case_detail' => $this->request->getVar('case_detail'),
            'user_phone' => $this->request->getVar('user_phone'),
            'case_status' => $this->request->getVar('case_status'),
            'case_loc' => $this->request->getVar('case_loc'),
            'admin_name' => $this->request->getVar('admin_name'),
            'admin_email' => $this->request->getVar('admin_email'),
            'case_update_log' => $this->request->getVar('case_update_log'),
            'case_update' => $this->request->getVar('case_update'),
            'case_img' => $imageName
        ];

        $RepairModel->update($id, $data);
        return redirect()->to('/index.php/home/index')->with('profilesuccess', 'แก้ไขข้อมูลเสร็จสิ้น');
    }
    public function update_user_detail_case2($id)
    {
        $RepairModel = new RepairModel();
        $user_item = $RepairModel->find($id);
        $old_img_name = $user_item['case_img'];

        $file = $this->request->getFile('case_img');
        if ($file->isValid() && !$file->hasMoved()) {
            if (file_exists("uploads/Imagecase/" . $old_img_name)) {
                unlink("uploads/Imagecase/" . $old_img_name);
            }
            $imageName = $file->getRandomName();
            $file->move('uploads/Imagecase/', $imageName);
        } else {
            $imageName = $old_img_name;
        }

            $data = [
                'case_type' => $this->request->getVar('case_type'),
                'user_name' => $this->request->getVar('user_name'),
                'user_email' => $this->request->getVar('user_email'),
                'user_phone' => $this->request->getVar('user_phone'),
                'case_detail' => $this->request->getVar('case_detail'),
                'case_status' => $this->request->getVar('case_status'),
                'case_loc' => $this->request->getVar('case_loc'),
                'admin_name' => $this->request->getVar('admin_name'),
                'admin_email' => $this->request->getVar('admin_email'),
                'case_update_log' => $this->request->getVar('case_update_log'),
                'case_update' => date('Y-m-d H:i:s'),
                'case_img' => $imageName       
            ];

            $RepairModel->update($id, $data);
            return redirect()->to('/index.php/home/index')->with('profileimgsuccess', 'แก้ไขข้อมูลเสร็จสิ้น');


        }

    // public function updateimgprofile()
    // {
    //     $UserModel = new UserModel();
    //     $id = $this->request->getVar('id');
    //     $file = $this->request->getFile('img');
    //     if ($file->isValid() && !$file->hasMoved()) {
    //         $imageName = $file->getRandomName();
    //         $file->move('uploads/', $imageName);
    //     }


    //         $data = [
    //             'img' => $this->request->getVar('img'),
    //             'img' => $imageName       
    //         ];

    //         $UserModel->update($id, $data);
    //         return redirect()->to('home/index')->with('profileimgsuccess', 'แก้ไขข้อมูลรูปเสร็จสิ้น');


    //     }



    

}
