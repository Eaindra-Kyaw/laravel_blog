<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'employee_id'];

    // Inverse relationship
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
