<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\EventModel;
use App\Models\UserModel;
use App\Models\RoomModel;

class Meeting extends Controller
{
    public function insert($Userid = null)
    {
        echo view('component/header');
        $UserModel = new UserModel();
        $RoomModel = new RoomModel();

        $Userdata['room'] = $RoomModel->orderBy('room_id')->findAll();
        $Userdata['user'] = $UserModel->where('user_id', $Userid)->first();
        return view('Meeting/insertCalendar', $Userdata);
    }

    public function store()
    {
        $EventModel = new EventModel();
        $data = [
            'user_id' => $this->request->getVar('user_id'),
            'meeting_title' => $this->request->getVar('meeting_title'),
            'start_date' => $this->request->getVar('start_date'),
            // 'start_date' => date('Y-m-d H:i:s'),
            'end_date' => $this->request->getVar('end_date'),
            'backgroundColor' => $this->request->getVar('backgroundColor'),
            'meeting_detail' => $this->request->getVar('meeting_detail'),
            'meeting_round' => $this->request->getVar('meeting_round'),
            'room_id' => $this->request->getVar('room_id'),
            'meeting_record' => $this->request->getVar('meeting_record'),
            'meeting_location' => $this->request->getVar('meeting_location'),
            'meeting_type1'      => implode(",", ($this->request->getVar('meeting_type1'))),
            // 'meeting_type1' => $this->request->getVar('meeting_type1'),
            // 'meeting_type2' => $this->request->getVar('meeting_type2'),
            // 'meeting_type3' => $this->request->getVar('meeting_type3'),
            'meeting_drink'      => implode(",", ($this->request->getVar('meeting_drink'))),
            'meeting_amount' => $this->request->getVar('meeting_amount'),
            'meeting_agency' => $this->request->getVar('meeting_agency'),
            'meeting_grouppepole' => $this->request->getVar('meeting_grouppepole'),
            'meeting_titlename' => $this->request->getVar('meeting_titlename'),
            'meeting_name' => $this->request->getVar('meeting_name'),
            'meeting_lastname' => $this->request->getVar('meeting_lastname'),
            'meeting_phone' => $this->request->getVar('meeting_phone'),
            'meeting_other_requirements'      => implode(",", ($this->request->getVar('meeting_other_requirements'))),
            'meeting_status' => $this->request->getVar('meeting_status'),
        ];

        $check = $EventModel->where('meeting_record', $data['meeting_record'])->first();

        if ($check === NULL) {
            $EventModel->insert($data);
            return redirect()->to('/index.php/FullCalendar/index')->with('profilesuccess', 'จองห้องประชุมเสร็จสิ้น');
        } else {
            $EventModel->insert($data);
            return redirect()->to('/index.php/FullCalendar/index')->with('failinsert', 'จองห้องประชุมผิดพลาด');
        }
    }

    // public function store() {
    //     $EventModel = new EventModel();
    //     $data = array(
    //         'user_id' => $this->request->getVar('user_id'),
    //         'meeting_title' => $this->request->getVar('meeting_title'),
    //         'start_date' => $this->request->getVar('start_date'),
    //         // 'start_date' => date('Y-m-d H:i:s'),
    //         'end_date' => $this->request->getVar('end_date'),
    //         'backgroundColor' => $this->request->getVar('backgroundColor'),
    //         'meeting_detail' => $this->request->getVar('meeting_detail'),
    //         'meeting_round' => $this->request->getVar('meeting_round'),
    //         'meeting_room' => $this->request->getVar('meeting_room'),
    //         'meeting_record' => $this->request->getVar('meeting_record'),
    //         'meeting_location' => $this->request->getVar('meeting_location'),

    //         'meeting_titlename' => $this->request->getVar('meeting_titlename'),
    //         'meeting_name' => $this->request->getVar('meeting_name'),
    //         'meeting_lastname' => $this->request->getVar('meeting_lastname'),
    //         'meeting_phone' => $this->request->getVar('meeting_phone'),

    //     );
    //         $EventModel->insert($data);
    //         return redirect()->to('/index.php/FullCalendar/index')->with('profilesuccess', 'จองห้องประชุมเสร็จสิ้น');


    // }
    public function meeting_user_information($Userid = null)
    {
        echo view('component/header');
        $EventModel = new EventModel();

        $Userdata['user'] = $EventModel->where('user_id', $Userid)
            ->join('room', 'room.room_id = events.room_id')
            ->findAll();
        return view('Userpage/user_meeting_information', $Userdata);
    }

    public function user_meeting_detail_edit($Userid = null)
    {
        echo view('component/header');
        $EventModel = new EventModel();
        $Userdata['room'] = $EventModel->where('meeting_id', $Userid)
            ->join('room', 'room.room_id = events.room_id')
            ->first();
        return view('Userpage/user_meeting_detail_edit', $Userdata);
    }

    public function delete_meeting_user($id = null)
    {
        $EventModel = new EventModel();
        $EventModel->where('meeting_id', $id)->delete($id);
        return redirect()->to('/index.php/home/index')->with('profilesuccess', 'ยกเลิกการจองสำเร็จ');
    }

    public function update_detail_meeting($id)
    {
        $EventModel = new EventModel();
        $data = array(
            'user_id' => $this->request->getVar('user_id'),
            'meeting_title' => $this->request->getVar('meeting_title'),
            'start_date' => $this->request->getVar('start_date'),
            // 'start_date' => date('Y-m-d H:i:s'),
            'end_date' => $this->request->getVar('end_date'),
            'backgroundColor' => $this->request->getVar('backgroundColor'),
            'meeting_detail' => $this->request->getVar('meeting_detail'),
            'meeting_round' => $this->request->getVar('meeting_round'),
            'room_id' => $this->request->getVar('room_id'),
            'meeting_record' => $this->request->getVar('meeting_record'),
            'meeting_location' => $this->request->getVar('meeting_location'),
            'meeting_type1'      => implode(",", ($this->request->getVar('meeting_type1'))),
            // 'meeting_type1' => $this->request->getVar('meeting_type1'),
            // 'meeting_type2' => $this->request->getVar('meeting_type2'),
            // 'meeting_type3' => $this->request->getVar('meeting_type3'),
            'meeting_drink'      => implode(",", ($this->request->getVar('meeting_drink'))),
            'meeting_amount' => $this->request->getVar('meeting_amount'),
            'meeting_agency' => $this->request->getVar('meeting_agency'),
            'meeting_grouppepole' => $this->request->getVar('meeting_grouppepole'),
            'meeting_titlename' => $this->request->getVar('meeting_titlename'),
            'meeting_name' => $this->request->getVar('meeting_name'),
            'meeting_lastname' => $this->request->getVar('meeting_lastname'),
            'meeting_phone' => $this->request->getVar('meeting_phone'),
            'meeting_other_requirements'      => implode(",", ($this->request->getVar('meeting_other_requirements'))),
            'meeting_status' => $this->request->getVar('meeting_status'),



        );

        $EventModel->update($id, $data);
        return redirect()->to('/index.php/FullCalendar/index')->with('profilesuccess', 'เเก้ไขการจองห้องประชุมเสร็จสิ้น');
    }

    public function meeting_information()
    {
        echo view('component/header');
        $EventModel = new EventModel();
        $Meetingdata['user'] = $EventModel->orderBy('user_id', 'DESC')
            ->join('room', 'room.room_id = events.room_id')
            ->findAll();
        return view('Meeting/information_meeting_list', $Meetingdata);
    }
    
}
