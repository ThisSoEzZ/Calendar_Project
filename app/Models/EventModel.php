<?php 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class EventModel extends Model
{
    protected $table = 'events';
    protected $primaryKey = 'meeting_id';
    protected $allowedFields = ['user_id','meeting_title','start_date','end_date','backgroundColor','meeting_detail','room_id','meeting_round','meeting_location','meeting_record','meeting_type1','meeting_drink',
    'meeting_amount','meeting_agency','meeting_grouppepole','meeting_name','meeting_lastname','meeting_phone','meeting_other_requirements','meeting_status','meeting_titlename'];
}
?>