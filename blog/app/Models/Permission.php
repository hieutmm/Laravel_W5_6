<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Group;
class Permission extends Model
{
    protected $table = 'permissions';
    protected $primaryKey = 'permission_id';
    protected $with = ['users','groups'];

    public function users()
    {
        return $this->hasMany(User::class,'user_id');
    }

    public function groups()
    {
        return $this->hasMany(Group::class,'group_id');
    }
}
