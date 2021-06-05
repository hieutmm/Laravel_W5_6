<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classes;
class Courses extends Model
{
    protected $table = 'courses';
    protected $primaryKey = 'course_id';
    protected $with = ['class'];

    public function class()
    {
        return $this->hasOne(Classes::class);
    }
}
