<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    use HasFactory;
    protected $table = "model_has_roles";

    public function userRole()
    {
        return $this->belongsTo("App\Models\Role", 'role_id', 'id');
    }
}
