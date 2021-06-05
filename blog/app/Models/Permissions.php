<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;
use App\Models\Groups;
class Permissions extends Model
{
    protected $table = 'permissions';
    protected $primaryKey = 'permission_id';
    protected $with = ['users','groups'];

    public function users()
    {
        return $this->hasMany(Users::class);
    }

    public function groups()
    {
        return $this->hasMany(Groups::class);
    }
}
