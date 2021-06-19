<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Group;
use App\Models\Permission;
class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $with = ['groups','permissions'];

    public function groups()
    {
        return $this->hasMany(Group::class,'group_id');
    }

    public function permissions()
    {
        return $this->hasMany(Permission::class,'permission_id');
    }
}
