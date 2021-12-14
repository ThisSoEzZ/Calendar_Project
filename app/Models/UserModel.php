<?php 

namespace App\Models;  
use CodeIgniter\Model;

  
class UserModel extends Model{

    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $allowedFields = [
        'user_name',
        'user_title',
        'user_lastname',
        'user_email',
        'user_password',
        'user_status',
        'user_created_at',
        'user_phone',
        'user_img'
    ];

}