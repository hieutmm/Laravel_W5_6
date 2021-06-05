<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Groups;
use App\Models\Permissions;
class Users extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $with = ['groups','permissions'];

    public function groups()
    {
        return $this->hasMany(Groups::class);
    }

    public function permissions()
    {
        return $this->hasMany(Permissions::class);
    }
}
