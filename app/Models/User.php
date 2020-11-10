<?php

namespace App\Models;
use Carbon\Carbon;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idnumber',
        'firstname',
        'lastname',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function attendances(){
        return $this->hasMany('App\Models\Attendance');
    }

    public function checkIn()
    {
        $start = Carbon::parse($this->date_begin);
        $end = Carbon::parse($this->date_end);
        $hours = $end->diffInHours($start);
        $seconds = $end->diffInSeconds($start);

        $now = $this->freshTimestamp();
        $idnumber = $this->idnumber;
        $firstname = $this->firstname;
        $lastname = $this->lastname;
        $hoursWorked = $hours . ':' . $seconds;

        return $this->attendances()->create([
            'idnumber' => $idnumber,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'hoursWorked' =>$hoursWorked,
            'day' => $now->format('Y-m-d'),
            'time_in' => $now->format('H:i:s')
        ]);
    }

    public function checkOut()
    {
        $now = $this->freshTimestamp();
        $idnumber = $this->idnumber;

        return $this->attendances()
                    ->where('day', $now->format('Y-m-d'))
                    ->where('idnumber', $idnumber)
                    ->whereNull('time_out')
                    ->firstOrFail()
                    ->update([
                        'time_out' => $now->format('H:i:s'),
                    ]);
    }

}
