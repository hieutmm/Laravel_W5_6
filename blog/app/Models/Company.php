<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trainer; 

class Company extends Model
{
    protected $table = 'Companies';

    public function search($value)
    {
        return self::where("category_id","=",$value)->paginate(10);
    }

    public function trainer()
    {
        return $this->hasOne(Trainer::class, 'company_id', 'company_id');
    }
    public function companyCat()
    {
        return $this->hasMany(Category::class, 'category_id', 'category_id');
    }
}
