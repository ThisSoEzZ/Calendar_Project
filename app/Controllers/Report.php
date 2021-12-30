<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use App\Models\EventModel;
use App\Models\RoomModel;


class Report extends Controller
{
  private $db;

	public function __construct()
	{
		$this->db = \Config\Database::connect();
	}

    public function index() {
        echo view('component/header');
        $RoomModel = new RoomModel();
        $EventModel = new EventModel();
        $data['room'] = $RoomModel->orderBY('room_id')->findAll();
        $Alltotal = $this->db->query("SELECT DISTINCT room_id , COUNT(*) AS total FROM events GROUP BY room_id")->getResult();
        $data['Alltotal'] = $Alltotal;





        return view('Meeting/report_meeting_list', $data);
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
