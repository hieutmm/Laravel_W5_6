<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Class;
class Courses+ extends Model
{
    protected $table = 'courses';
    protected $primaryKey = 'course_id';
    protected $with = ['class'];

    public function class()
    {
        return $this->hasOne(Class::class,'class_id');
    }
}
