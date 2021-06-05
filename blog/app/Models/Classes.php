<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Courses;

class Classes extends Model
{
    protected $table = 'classes';
    protected $primaryKey = 'class_id';
    protected $with = ['course'];

    public function course()
    {
        return $this->hasOne(Courses::class);
    }
}
