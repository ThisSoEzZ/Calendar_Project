<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class Register extends Controller
{
    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('component/header');
        echo view('signup', $data);

    }
  
    public function store()
    {
        echo view('component/header');
        helper(['form']);

        $rules = [
            'user_title'           => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'กรุณาเลือกคำนำหน้า',
                ]           
        ],
            'user_name'           => [
                'rules' => 'required|min_length[2]|max_length[50]',
                'errors' => [
                    'required' => 'กรุณากรอกชื่อ',
                    'min_length' => 'ชื่่อห้ามน้อยกว่า 2',
                    'max_length' => 'ชื่อห้ามมากกว่า 50',
                ]           
        ],
        'user_lastname'           => [
            'rules' => 'required|min_length[2]|max_length[50]',
            'errors' => [
                'required' => 'กรุณากรอกนามสกุล',
                'min_length' => 'ชื่่อห้ามน้อยกว่า 2',
                'max_length' => 'ชื่อห้ามมากกว่า 50',

            ]           
    ],
    'user_phone'           => [
        'rules' => 'required|min_length[2]|max_length[50]',
        'errors' => [
            'required' => 'กรุณากรอกเบอร์โทรศัพท์',
            'min_length' => 'ชื่่อห้ามน้อยกว่า 8',
            'max_length' => 'ชื่อห้ามมากกว่า 11',

        ]           
],
            'user_email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'กรุณากรอกอีเมล',
                    'valid_email' => 'รูปแบบอีเมลไม่ถูกต้อง',
                ]           
        ],
        'user_password' => [
            'rules' => 'required|min_length[6]',
            'errors' => [
                'required' => 'กรุณากรอกรหัสผ่าน',
                'min_length' => 'รหัสผ่านห้ามน้อยกว่า 6',
            ]                   
        ],
            'confirmpassword' => [
                'rules' => 'matches[user_password]',
                'errors' => [
                    'matches' => 'กรุณากรอกรหัสผ่านให้ตรงกัน',
                ]                   
            ],
        ];

        if($this->validate($rules)){
            $userModel = new UserModel();

            $data = [
                'user_title'     => $this->request->getVar('user_title'),
                'user_name'     => $this->request->getVar('user_name'),
                'user_lastname'     => $this->request->getVar('user_lastname'),
                'user_email'    => $this->request->getVar('user_email'),
                'user_img'    => $this->request->getVar('user_img'),
                'user_phone'    => $this->request->getVar('user_phone'),
                'user_password' => password_hash($this->request->getVar('user_password'), PASSWORD_DEFAULT)
            ];

            $checkregister = $userModel->where('user_email', $data['user_email'])->first();

            if ($checkregister === null) {
                $userModel->save($data);
                $session = session();
                $session->setFlashdata('registerSuccess', 'ลงทะเบียนสำเร็จ');
                return redirect()->to('/index.php/login/signin');
    
            } else{
                $session = session();
                $session->setFlashdata('faillregister', 'อีเมลนี้มีผู้ใช้เเล้ว');
                echo view('/signup', $data);
            }

        }else{
            $data['validation'] = $this->validator;
            echo view('/signup', $data);
        }

    }
    // https://onlinewebtutorblog.com/image-upload-with-form-data-in-codeigniter-4-tutorial/
}