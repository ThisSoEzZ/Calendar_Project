<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\RepairModel;

  
class Admin extends Controller
{
    private $db;

	public function __construct()
	{
		$this->db = \Config\Database::connect();
	}

    public function index() {
        echo view('component/headerAdmin');
        $UserModel = new UserModel();
        $RepairModel = new RepairModel();
        $data['countUser1'] = $UserModel->where('user_status',0)->get()->getNumRows();
        $data['countUser2'] = $UserModel->where('user_status',1)->get()->getNumRows();
        $data['countWork1'] = $RepairModel->where('case_status <',3)->get()->getNumRows();
        $data['countWork2'] = $RepairModel->where('case_status',3)->get()->getNumRows();
        $year_wise = $this->db->query("SELECT COUNT(user_id) as count,MONTHNAME(user_created_at) as month FROM users GROUP BY MONTHNAME(user_created_at) ORDER BY month ASC")->getResult();
		$month_wise = $this->db->query("SELECT COUNT(user_id) as count,YEAR(user_created_at) as year FROM users GROUP BY YEAR(user_created_at) ORDER BY year ASC")->getResult();
       
        $month_work = $this->db->query("SELECT COUNT(case_id) as count,MONTHNAME(date_save) as month FROM repair_case GROUP BY MONTHNAME(date_save) ORDER BY month ASC")->getResult();
		$year_work = $this->db->query("SELECT COUNT(case_id) as count,YEAR(date_save) as year FROM repair_case GROUP BY YEAR(date_save) ORDER BY year ASC")->getResult();

		$com_work = $this->db->query("SELECT COUNT(case_id) as count,MONTHNAME(date_save) as month FROM repair_case WHERE case_status ='3' GROUP BY MONTHNAME(date_save) ORDER BY month ASC")->getResult();
		$comyear_work = $this->db->query("SELECT COUNT(case_id) as count,YEAR(date_save) as year FROM repair_case WHERE case_status ='3' GROUP BY YEAR(date_save) ORDER BY  year ASC")->getResult();

		$data['year_wise'] = $year_wise;
		$data['month_wise'] = $month_wise;
        $data['year_work'] = $year_work;
		$data['month_work'] = $month_work;
        $data['com_work'] = $com_work;
        $data['comyear_work'] = $comyear_work;

        return view('/dashboard', $data);

    }

    public function admin_profile($Userid = null)
    {
        echo view('component/headerAdmin');
        $UserModel = new UserModel();
        $Userdata['user'] = $UserModel->where('user_id', $Userid)->first();
        return view('AdminPage/admin_profile', $Userdata);
    }

    public function getAlluser()
    {
        echo view('component/headerAdmin');
        $UserModel = new UserModel();
        $data['user'] = $UserModel->Where('user_status', '0')->findAll();
        return view('AdminPage/admin_all_user', $data);
    }
    public function getAlladmin()
    {
        echo view('component/headerAdmin');
        $UserModel = new UserModel();
        $data['admin'] = $UserModel->Where('user_status', '1')->findAll();
        return view('AdminPage/admin_all_admin', $data);
    }
    public function getAllrepair()
    {
        echo view('component/headerAdmin');
        $RepairModel = new RepairModel();
        $data['count0'] = $RepairModel->orderBy('case_status')->get()->getNumRows();
        $data['count1'] = $RepairModel->where('case_status', 1)->get()->getNumRows();
        $data['count2'] = $RepairModel->where('case_status', 2)->get()->getNumRows();
        $data['count3'] = $RepairModel->where('case_status', 3)->get()->getNumRows();
        $data['count4'] = $RepairModel->where('case_status', 4)->get()->getNumRows();
        $data['repair'] = $RepairModel->orderBy('case_id', 'DESC')->findAll();
        return view('AdminPage/admin_all_repair', $data);
    }

    public function bystatusAdmin($id = null)
    {
        echo view('component/headerAdmin');
        $RepairModel = new RepairModel();
        $data['count0'] = $RepairModel->orderBy('case_status')->get()->getNumRows();
        $data['count1'] = $RepairModel->where('case_status', 1)->get()->getNumRows();
        $data['count2'] = $RepairModel->where('case_status', 2)->get()->getNumRows();
        $data['count3'] = $RepairModel->where('case_status', 3)->get()->getNumRows();
        $data['count4'] = $RepairModel->where('case_status', 4)->get()->getNumRows();
        $data['repair'] = $RepairModel->where('case_status', $id)->findAll();
        return view('AdminPage/admin_all_repair', $data);
    }

    public function Admindeleterepair($id = null) {
        $RepairModel = new RepairModel();
        $RepairModel->where('case_id', $id)->delete($id);
        return redirect()->to('/index.php/Admin/admin_all_repair')->with('profilesuccess', 'ลบการสั่งซ่อมสำเร็จ');
    }

    public function updateProfileAdmin($id)
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
            'user_password' => password_hash($this->request->getVar('user_password'), PASSWORD_DEFAULT),
            'user_img' => $imageName
        ];

        $UserModel->update($id, $data);
        return redirect()->to('/index.php/dashboard')->with('profilesuccess', 'แก้ไขข้อมูลเสร็จสิ้น');
    }

    public function updatePasswordAdmin() {
        $UserModel = new UserModel();
        $id = $this->request->getVar('user_id');
        $data = [
            'user_password' => password_hash($this->request->getVar('user_password'), PASSWORD_DEFAULT),
        ];
        $UserModel->update($id, $data);
        return redirect()->to('/index.php/dashboard')->with('profilesuccess', 'แก้ไขข้อมูลเสร็จสิ้น');
    }
    public function updatePasswordUser() {
        $UserModel = new UserModel();
        $id = $this->request->getVar('user_id');
        $data = [
            'user_password' => password_hash($this->request->getVar('user_password'), PASSWORD_DEFAULT),
        ];
        $UserModel->update($id, $data);
        return redirect()->to('/index.php/admin/getAlluser')->with('profilesuccess', 'แก้ไขข้อมูลเสร็จสิ้น');
    }
    public function editpassword($Userid = null)
    {
        echo view('component/headerAdmin');
        $UserModel = new UserModel();
        $Userdata['user'] = $UserModel->where('user_id', $Userid)->first();
        return view('AdminPage/admin_chancepasswordUser', $Userdata);
    }
    public function editpasswordAdmin($Userid = null)
    {
        echo view('component/headerAdmin');
        $UserModel = new UserModel();
        $Userdata['user'] = $UserModel->where('user_id', $Userid)->first();
        return view('AdminPage/admin_chanceAdminpassword', $Userdata);
    }
    public function admin_Userprofile($Userid = null)
    {
        echo view('component/headerAdmin');
        $UserModel = new UserModel();
        $Userdata['user'] = $UserModel->where('user_id', $Userid)->first();
        return view('AdminPage/Admin_user_profile', $Userdata);
    }

    public function admin_repairDetail($id = null)
    {
        echo view('component/headerAdmin');
        $RepairModel = new RepairModel();
        
        $data['repair'] = $RepairModel->where('case_id', $id)->first();
        return view('AdminPage/admin_detail_repair', $data);
    }

    public function admin_Adminprofile($Userid = null)
    {
        echo view('component/headerAdmin');
        $UserModel = new UserModel();
        $Userdata['admin'] = $UserModel->where('user_id', $Userid)->first();
        return view('AdminPage/admin_admin_profile', $Userdata);
    }
    public function editAdminpasswordAdmin($Userid = null)
    {
        echo view('component/headerAdmin');
        $UserModel = new UserModel();
        $Userdata['user'] = $UserModel->where('user_id', $Userid)->first();
        return view('AdminPage/admin_chanceAdminpasswordAdmin', $Userdata);
    }
    public function updateAdminPasswordAdmin() {
        $UserModel = new UserModel();
        $id = $this->request->getVar('user_id');
        $data = [
            'user_password' => password_hash($this->request->getVar('user_password'), PASSWORD_DEFAULT),
        ];
        $UserModel->update($id, $data);
        return redirect()->to('/index.php/admin/admin_all_admin')->with('profilesuccess', 'แก้ไขข้อมูลเสร็จสิ้น');
    }

    public function updateCaseRepair($id)
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
            'case_type' => $this->request->getVar('case_type'),
            'case_detail' => $this->request->getVar('case_detail'),
            'case_loc' => $this->request->getVar('case_loc'),
            'case_update' => date('Y-m-d H:i:s'),
            'user_name' => $this->request->getVar('user_name'),
            'user_email' => $this->request->getVar('user_email'),
            'user_phone' => $this->request->getVar('user_phone'),
            'case_status' => $this->request->getVar('case_status'),
            'admin_email' => $this->request->getVar('admin_email'),
            'admin_name' => $this->request->getVar('admin_name'),
            'case_update_log' => $this->request->getVar('case_update_log'),

            'case_img' => $imageName
        ];

        $RepairModel->update($id, $data);
        return redirect()->to('/index.php/Admin/admin_all_repair')->with('profilesuccess', 'แก้ไขข้อมูลเสร็จสิ้น');
    }



}