<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name', 'age', 'position'];

    // One-to-One relationship
    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
