<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\RepairModel;
use App\Models\UserModel;


class Repair extends Controller

{

    public function index()
    {
        echo view('component/header');
        
        $RepairModel = new RepairModel();
        $data['count0'] = $RepairModel->orderBy('case_status')->get()->getNumRows();
        $data['count1'] = $RepairModel->where('case_status', 1)->get()->getNumRows();
        $data['count2'] = $RepairModel->where('case_status', 2)->get()->getNumRows();
        $data['count3'] = $RepairModel->where('case_status', 3)->get()->getNumRows();
        $data['count4'] = $RepairModel->where('case_status', 4)->get()->getNumRows();
        $data['repair'] = $RepairModel->orderBy('case_id', 'DESC')->findAll();
        return view('Userpage/repair_list', $data);

        
    }

    public function bystatus($id = null)
    {
        echo view('component/header');
        $RepairModel = new RepairModel();
        $data['count0'] = $RepairModel->orderBy('case_status')->get()->getNumRows();
        $data['count1'] = $RepairModel->where('case_status', 1)->get()->getNumRows();
        $data['count2'] = $RepairModel->where('case_status', 2)->get()->getNumRows();
        $data['count3'] = $RepairModel->where('case_status', 3)->get()->getNumRows();
        $data['count4'] = $RepairModel->where('case_status', 4)->get()->getNumRows();
        $data['repair'] = $RepairModel->where('case_status', $id)->findAll();
        return view('Userpage/repair_list', $data);
    }



    // public function demo2()
    // {
    //     echo view('component/header');
    //     $RepairModel = new RepairModel();
	// 	$data['count'] = $RepairModel->where('user_status', 1)->get()->getNumRows();
        
    //     return view('Userpage/repair_list', $data);
    // }




    public function repairDetail($id = null)
    {
        echo view('component/header');
        $RepairModel = new RepairModel();
        
        $data['repair'] = $RepairModel->where('case_id', $id)->first();
        return view('Userpage/repair_detail', $data);
    }
    
    // public function demo2()
	// {
    //     $RepairModel = new RepairModel();
	// 	$data['count'] = $RepairModel->where('user_status', 1)->get()->getNumRows();
    //     return view('Userpage/repair_detail', $data);
	// }

    public function repairGetId($Userid = null)
    {
        echo view('component/header');
        helper(['form']);
        $Userdata = [];
        $UserModel = new UserModel();
        $Userdata['user'] = $UserModel->where('user_id', $Userid)->first();
        return view('Userpage/repair_insert_case', $Userdata);
    }

    public function repair_case_insert() {
        
        $RepairModel = new RepairModel();
        $file = $this->request->getFile('case_img');
        if($file->isValid() && ! $file->hasMoved())
        {
                 $imageName = $file->getRandomName();
                 $file->move('uploads/Imagecase/',$imageName);
        }
        $data = [
            'user_id' => $this->request->getPost('user_id'),
            'case_type' => $this->request->getPost('case_type'),
            'case_detail' => $this->request->getPost('case_detail'),
            'user_name' => $this->request->getPost('user_name'),
            'user_email' => $this->request->getPost('user_email'),
            'user_phone' => $this->request->getPost('user_phone'),
            'case_loc' => $this->request->getPost('case_loc'),
            'case_status' => $this->request->getPost('case_status'),
            'date_save' => date('Y-m-d H:i:s'),
            'case_update' => date('Y-m-d H:i:s'),
            'case_img' => $imageName       
        ];
        $RepairModel->save($data);
        return redirect()->to('/index.php/home/index')->with('profilesuccess', 'เพิ่มสั่งซ่อมสำเร็จ');
    }

    public function confirmdelete($id = null)
    {
        echo view('component/header');
        $RepairModel = new RepairModel();
        $RepairModel->delete($id);
        $data = [
               'status' => 'Delete ok',
               'status_text' => 'OK',
               'status_icon' => 'success'

        ]; 
        return $this->response->setJSON($data);
    }

    public function delete($id = null) {
    $RepairModel = new RepairModel();
    $RepairModel->where('case_id', $id)->delete($id);
    return redirect()->to('/index.php/home/index')->with('profilesuccess', 'ลบการสั่งซ่อมสำเร็จ');
}
}
