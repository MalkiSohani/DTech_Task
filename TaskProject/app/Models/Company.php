<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'email',
        'website',
    ];

    // Relationship with company
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

   
}
