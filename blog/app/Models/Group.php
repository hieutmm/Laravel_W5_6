<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Permission;

class Group extends Model
{
    protected $table = 'groups';
    protected $primaryKey = 'group_id';
    protected $with = ['users','permissions'];

    public function users()
    {
        return $this->hasMany(User::class,'user_id');
    }

    public function permissions()
    {
        return $this->hasMany(Permission::class,'permission_id');
    }
}
