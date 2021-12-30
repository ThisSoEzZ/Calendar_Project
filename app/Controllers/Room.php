<?php namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use App\Models\EventModel;
use App\Models\RoomModel;


class Room extends Controller
{

    public function index() {

        echo view('component/header');
        $RoomModel = new RoomModel();
        $data['room'] = $RoomModel->orderBY('room_id')->findAll();
        return view('Roompage/information_room', $data);

    }
    public function GetRoomId($roomid = null)
    {
        echo view('component/header');
        $RoomModel = new RoomModel();

        $Userdata['room_id'] = $RoomModel->where('room_id', $roomid)->first();
        return view('Roompage/room_detail', $Userdata);
    }
 
}