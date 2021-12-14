<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
  

class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('component/header');
        echo view('signin');

    } 
  
    public function loginAuth()
    {
        $session = session();

        $userModel = new UserModel();

        $email = $this->request->getvar('user_email');
        $password = $this->request->getvar('user_password');
        
        $data = $userModel->where('user_email', $email)->first();
        
        if($data){
            $pass = $data['user_password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                
                $ses_data = [
                    'user_id' => $data['user_id'],
                    'user_title' => $data['user_title'],
                    'user_name' => $data['user_name'],
                    'user_lastname' => $data['user_lastname'],
                    'user_email' => $data['user_email'],
                    'user_img' => $data['user_img'],
                    'user_status' => $data['user_status'],
                    'isLoggedIn' => TRUE
                ];
                
                $session->set($ses_data);

                $status = $_SESSION['user_status'];

				if($status==0){
                    $session->setFlashdata('Success', 'เข้าสู่ระบบ');
                    return redirect()->to('/index.php/home/index');
				}
                if($status==1){
                    $session->setFlashdata('Success', 'เข้าสู่ระบบผู้จัดการระบบ');
                    return redirect()->to('/index.php/dashboard');
				}
            }else{
                $session->setFlashdata('msg', 'รหัสผ่านไม่ถูกต้อง.');
                return redirect()->to('/index.php/login/signin');
            }

        }else{
            $session->setFlashdata('msg', 'อีเมลไม่ถูกต้อง.');
            return redirect()->to('/index.php/login/signin');
        }
    }        

    public function logout() {
        $session = session();
        $session->destroy();
        if($session->destroy = TRUE){
            $session = session();
            return redirect()->to('/index.php/logout_message');
        }

    }
    public function logout_message() {
        $session = session();
        $session->setFlashdata('logoutsuccess', 'ออกจากระบบ');
        return redirect()->to('/index.php/login/signin');

    }
}