<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idnumber',
        'firstname',
        'lastname',
        'hoursWorked',
        'day',
        'time_in',
        'time_out',
    ];

    public function user(){
    	return $this->belongsTo('App\Models\User');
    }
}
