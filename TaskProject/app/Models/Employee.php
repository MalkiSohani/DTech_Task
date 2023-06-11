<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'company_id',
        'email',
        'phone',
    ];

     // Relationship with employees
   //  public function employees()
   //  {
      //   return $this->hasMany(Employee::class);
   //  }

     public function company()
     {
         return $this->belongsTo(Company::class);
     }
}
