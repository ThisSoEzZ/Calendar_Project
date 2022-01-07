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
        $this->db->query("SET lc_time_names = 'th_TH'");
        $Alltotal = $this->db->query("    SELECT DISTINCT COUNT(*) TotalCount, a.room_id, b.room_name , a.meeting_id,YEAR(start_date) as year,SUM(meeting_amount) as total FROM events a INNER JOIN room b ON a.room_id = b.room_id WHERE YEAR(start_date) = YEAR(CURDATE()) GROUP BY room_id")->getResult();
        $data['Alltotal'] = $Alltotal;
        return view('Meeting/report_meeting_list', $data);
    }



    // $Alltotal = $this->db->query("SELECT DISTINCT COUNT(*) TotalCount, a.room_id, b.room_name , a.meeting_id,YEAR(start_date) as year,SUM(meeting_amount) as total FROM events a INNER JOIN room b ON a.room_id = b.room_id WHERE start_date >= DATE_SUB(CURDATE(), INTERVAL 0 YEAR) GROUP BY room_id")->getResult();

    // $Alltotal = $this->db->query("SELECT DISTINCT COUNT(*) TotalCount, a.room_id, b.room_name , a.meeting_id,YEAR(start_date) as year,SUM(meeting_amount) as total FROM events a INNER JOIN room b ON a.room_id = b.room_id GROUP BY room_id;")->getResult();

  public function Test($Roomid = 0, $Year = 0)
  {
    echo view('component/header');


    $RoomModel = new RoomModel();
    $EventModel = new EventModel();
    $this->db->query("SET lc_time_names = 'th_TH'");
    $month_wise = $this->db->query("SELECT room_id ,MONTHNAME(start_date) as month ,YEAR(start_date) as year, COUNT(*) AS total FROM events WHERE room_id = $Roomid AND YEAR(start_date) = $Year GROUP BY MONTHNAME(start_date),YEAR(start_date);")->getResult();
    $year_wise = $this->db->query("SELECT room_id ,YEAR(start_date) as year , COUNT(*) AS total FROM events WHERE room_id = $Roomid GROUP BY YEAR(start_date)")->getResult();
    
    // $month_wise2022 = $this->db->query("SELECT room_id ,MONTHNAME(start_date) as month ,YEAR(start_date) as year, COUNT(*) AS total FROM events WHERE room_id = 1 AND YEAR(start_date) = 2022 GROUP BY MONTHNAME(start_date),YEAR(start_date);")->getResult();


    // $data['room'] = $EventModel->where('room_id', $Roomid)->first();
    // $data['room2'] = $RoomModel->where('room_id', $Roomid)->first();

    
    $data['year_wise'] = $year_wise;
    $data['month_wise'] = $month_wise;
    return view('Meeting/TestEvent', $data);

  }
  public function report_meeting_detail($Roomid = 0, $Year = 0)
  {
    echo view('component/header');


    $RoomModel = new RoomModel();
    $EventModel = new EventModel();
    $this->db->query("SET lc_time_names = 'th_TH'");
    $month_wise = $this->db->query("SELECT room_id ,MONTHNAME(start_date) as month ,YEAR(start_date) as year, COUNT(*) AS total FROM events WHERE room_id = $Roomid AND YEAR(start_date) = $Year GROUP BY MONTHNAME(start_date),YEAR(start_date);")->getResult();
    $year_wise = $this->db->query("SELECT room_id ,YEAR(start_date) as year , COUNT(*) AS total FROM events WHERE room_id = $Roomid GROUP BY YEAR(start_date)")->getResult();
    $idYear = $this->db->query("SELECT DISTINCT room_id ,YEAR(start_date) as year, COUNT(*) AS total FROM events WHERE room_id = $Roomid GROUP BY YEAR(start_date);")->getResult();

    // $month_wise2022 = $this->db->query("SELECT room_id ,MONTHNAME(start_date) as month ,YEAR(start_date) as year, COUNT(*) AS total FROM events WHERE room_id = 1 AND YEAR(start_date) = 2022 GROUP BY MONTHNAME(start_date),YEAR(start_date);")->getResult();


    // $data['room'] = $EventModel->where('room_id', $Roomid)->first();
    // $data['room2'] = $RoomModel->where('room_id', $Roomid)->first();

    $data['idYear'] = $idYear;
    $data['year_wise'] = $year_wise;
    $data['month_wise'] = $month_wise;
    return view('Meeting/report_meeting_detail', $data);


  }

}
