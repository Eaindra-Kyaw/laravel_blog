<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Profile extends Model
{
    protected $fillable = ['employee_id','phone'];
    public function employee() { return $this->belongsTo(Employee::class); }
}
