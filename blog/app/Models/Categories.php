<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Companies;

class Categories extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'categories_id';
    protected $with = ['companyNames'];

    public function companyNames()
    {
        return $this->hasMany(Companies::class);
    }
}
