<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Company extends Model
{
    protected $table = 'companies';
    protected $primaryKey = 'company_id';
    protected $with = ['categoryNames'];

    public function categoryNames()
    {
        return $this->hasMany(Category::class,'category_id');
    }
}
