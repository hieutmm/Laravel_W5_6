<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;
use App\Models\Permissions;

class Groups extends Model
{
    protected $table = 'groups';
    protected $primaryKey = 'group_id';
    protected $with = ['users','permissions'];

    public function users()
    {
        return $this->hasMany(Users::class);
    }

    public function permissions()
    {
        return $this->hasMany(Permissions::class);
    }
}
