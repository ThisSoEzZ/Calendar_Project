<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use App\Models\EventModel;
use App\Models\RoomModel;


class FullCalendar extends Controller
{
  private $db;

	public function __construct()
	{
		$this->db = \Config\Database::connect();
	}
  public function index()
  {
    echo view('component/header');
    $RoomModel = new RoomModel();
    $EventModel = new EventModel();
    $query = $EventModel->select('*')->join('room', 'room.room_id = events.room_id')->get();
    // ->where('meeting_status',1)
    $data = $query->getResult();

    foreach ($data as $key => $value) {
      $data['data'][$key]['id'] = $value->meeting_id;
      $data['data'][$key]['room_name'] = $value->room_name;
      $data['data'][$key]['startcontent'] = $value->start_date;
      $data['data'][$key]['endcontent'] = $value->end_date;
      $data['data'][$key]['name'] = $value->meeting_titlename . ' ' . $value->meeting_name . ' ' . $value->meeting_lastname;
      $data['data'][$key]['titlePopover'] = ' ' . $value->meeting_title;
      $data['data'][$key]['phone'] = ' ' . $value->meeting_phone;

      $data['data'][$key]['title'] = $value->meeting_title . '  /  จองโดย : ' . $value->meeting_titlename . ' ' . $value->meeting_name . ' ' . $value->meeting_lastname . '  /  เบอร์โทรศัพท์ : ' . $value->meeting_phone . '  /  ห้องประชุม : ' . $value->room_name;
      $data['data'][$key]['start'] = $value->start_date;
      $data['data'][$key]['end'] = $value->end_date;
      $data['data'][$key]['backgroundColor'] = $value->backgroundColor;
      $data['data'][$key]['textColor'] = "white";
      $data['data'][$key]['description'] = 'ห้องประชุม : ' . $value->room_name . '  / รายละเอียด : ' . $value->meeting_detail . '  /  เริ่ม : ' . $value->start_date . '  /  สิ้นสุด :' . $value->end_date;
    }


    $data['room'] = $RoomModel->orderBy('room_id')->findAll();

    return view('index', $data);
  }



  public function bystatus($id = null)
  {

    echo view('component/header');
    $EventModel = new EventModel();
    $RoomModel = new RoomModel();

    $data = $EventModel->Where('meeting_status', $id)->get()->getResult();



    foreach ($data as $key => $value) {
      $data['data'][$key]['id'] = $value->meeting_id;
      $data['data'][$key]['title'] = $value->meeting_title . '/ เรื่อง' . $value->meeting_detail;
      $data['data'][$key]['start'] = $value->start_date;
      $data['data'][$key]['end'] = $value->end_date;
      $data['data'][$key]['backgroundColor'] = $value->backgroundColor;
      $data['data'][$key]['textColor'] = "white";
      $data['data'][$key]['description'] = $value->meeting_title . '/ เรื่อง :' . $value->meeting_detail . '/ เริ่ม :' . $value->start_date . '/ สิ้นสุด :' . $value->end_date;
    }
    $data['room'] = $RoomModel->orderBy('room_id')->findAll();

    return view('index', $data);



    // $EventModel = new EventModel();
    // $data['count1'] = $RepairModel->where('meeting_id ', 29)->get()->getNumRows();
    // $data['repair'] = $RepairModel->where('case_status', $id)->findAll();
    // return view('index', $data);
  }



  public function byroom()
  {

    echo view('component/header');
    $EventModel = new EventModel();
    $RoomModel = new RoomModel();

    $query = $EventModel->like('room_id', $this->request->getVar('q'))->get();


    // $query = $EventModel->Where('meeting_id',35)->get();

    $data = $query->getResult();

    foreach ($data as $key => $value) {
      $data['data'][$key]['id'] = $value->meeting_id;
      $data['data'][$key]['title'] = $value->meeting_title . '/ เรื่อง' . $value->meeting_detail;
      $data['data'][$key]['start'] = $value->start_date;
      $data['data'][$key]['end'] = $value->end_date;
      $data['data'][$key]['backgroundColor'] = $value->backgroundColor;
      $data['data'][$key]['textColor'] = "white";
      $data['data'][$key]['description'] = $value->meeting_title . '/ เรื่อง :' . $value->meeting_detail . '/ เริ่ม :' . $value->start_date . '/ สิ้นสุด :' . $value->end_date;
    }
    $data['room'] = $RoomModel->orderBy('room_id')->findAll();

    return view('index', $data);
  }


  public function getRecords()
  {

    echo view('component/header');
    $EventModel = new EventModel();
    $query = $EventModel->join('room', 'room.room_id = events.room_id')->like('meeting_id', $this->request->getVar('q'))
      ->orLike('meeting_record', $this->request->getVar('q'))
      ->orLike('room_name', $this->request->getVar('q'))
      ->orLike('start_date', $this->request->getVar('q'))->get();


    // $query = $EventModel->Where('meeting_id',35)->get();

    $data = $query->getResult();

    foreach ($data as $key => $value) {
      $data['data'][$key]['id'] = $value->meeting_id;
      $data['data'][$key]['title'] = $value->meeting_title . '/ เรื่อง' . $value->meeting_detail;
      $data['data'][$key]['start'] = $value->start_date;
      $data['data'][$key]['end'] = $value->end_date;
      $data['data'][$key]['backgroundColor'] = $value->backgroundColor;
      $data['data'][$key]['textColor'] = "white";
      $data['data'][$key]['description'] = $value->meeting_title . '/ เรื่อง :' . $value->meeting_detail . '/ เริ่ม :' . $value->start_date . '/ สิ้นสุด :' . $value->end_date;
    }

    return view('index', $data);


    //   $query = $EventModel->like('meeting_id', $this->request->getVar('q'))
    //               ->select('id, meeting_id as text')
    //               ->get();

    //   $data = $query->getResult();

    // echo json_encode($data);
  }


  public function DetailMeetingRoom($Roomid = null)
  {
    echo view('component/header');

    $EventModel = new EventModel();
    $Roomdata['room'] = $EventModel->where('meeting_id', $Roomid)
      ->join('room', 'room.room_id = events.room_id')
      ->first();
    return view('Meeting/detail_meetingroom', $Roomdata);
  }


  public function Test($Roomid = null)
  {
    echo view('component/header');
    $RoomModel = new RoomModel();
    $EventModel = new EventModel();
    $month_wise = $this->db->query("SELECT room_id ,MONTHNAME(start_date) as month , COUNT(*) AS total FROM events WHERE room_id = $Roomid GROUP BY MONTHNAME(start_date)")->getResult();
   
    $year_wise = $this->db->query("SELECT room_id ,YEAR(start_date) as year , COUNT(*) AS total FROM events WHERE room_id = $Roomid GROUP BY YEAR(start_date)")->getResult();
    
    $data['room'] = $EventModel->where('room_id', $Roomid)->first();
    $data['room2'] = $RoomModel->where('room_id', $Roomid)->first();

    
    $data['year_wise'] = $year_wise;
    $data['month_wise'] = $month_wise;
    return view('/TestEvent', $data);

  }
}
