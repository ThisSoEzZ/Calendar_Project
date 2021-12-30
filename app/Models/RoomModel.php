<?php 

namespace App\Models;  
use CodeIgniter\Model;

  
class RoomModel extends Model{

    protected $table = 'room';
    protected $primaryKey = 'room_id';
    protected $allowedFields = [
        'room_name'
    ];

}