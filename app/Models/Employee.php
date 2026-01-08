<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Employee extends Model
{
    protected $fillable = ['name'];

    // One-to-One
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    // One-to-Many
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    // Many-to-Many
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    // HasManyThrough: Employee -> Categories through Orders
    public function categories(): HasManyThrough
    {
        return $this->hasManyThrough(
            Category::class,
            Order::class,
            'employee_id',
            'id',
            'id',
            'category_id'
        );
    }
}
