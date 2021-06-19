<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'category_id';
    protected $with = ['companyNames'];

    public function companyNames()
    {
        return $this->hasMany(Company::class,'company_id');
    }
}
