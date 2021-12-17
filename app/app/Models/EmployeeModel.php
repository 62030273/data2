<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{
    //use HasFactory;
    protected $table="employee";
    protected $follable = [
        'emp_id','emp_name','emp_lname','job','chg_hour'
    ];
}
