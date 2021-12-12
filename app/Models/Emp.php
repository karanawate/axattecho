<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emp extends Model
{
    use HasFactory;

    public $table = 'emps';

    public $fillable  = [
        'emp_name',
        'emp_email',
        'emp_mobile',
        'emp_address',
        'emp_status'
       ];
       
    public $dates = [
        'created_at',
        'updated_at'
    ];
}
