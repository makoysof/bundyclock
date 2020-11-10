<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class BundyClockController extends Controller
{
    public function timeIn(Request $request){
    	$idnumber = auth()->user()->idnumber;
    	$day = date('Y-m-d');

    	$attendance = DB::table('attendances')->where('idnumber', '=', $idnumber)->where('day', '=', $day)->first();
	    if($attendance == null){
	    	$request->user()->checkIn();

	    	return redirect('home');
	    }
	    else{
	    	return redirect('home');
	    }
    	
    }

    public function timeOut(Request $request){
    	$idnumber = auth()->user()->idnumber;
    	$day = date('Y-m-d');

    	if($attendance = DB::table('attendances')->where('idnumber', '=', $idnumber)->where('day', '=', $day)->count() > 0){
	    	$request->user()->checkOut();

	    	return redirect('home');
		}
    	else{
    		return redirect('home');
    	}
    }
}
