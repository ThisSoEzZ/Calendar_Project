<?php 

namespace App\Models;  
use CodeIgniter\Model;

  
class RepairModel extends Model{

    protected $table = 'repair_case';
    protected $primaryKey = 'case_id';
    protected $allowedFields = [
        'user_id',
        'case_type',
        'case_detail',
        'case_loc',
        'user_name',
        'user_email',
        'case_status',
        'date_save',
        'admin_email',
        'admin_name',
        'case_update',
        'case_update_log',
        'user_phone',
        'case_img'

    ];
 

}