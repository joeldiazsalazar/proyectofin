<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;	
use App\Classroom;
use App\Charts\SampleChart;
use App\Http\Controllers\Controller;
use App\User;
use DB;
class PagesController extends Controller
{


	public function index(){

       $users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();

       $chart = new SampleChart;
       $chart->dataset('sample','line', $users);

        return view('statistics.index',compact('chart'));
	}



     //  public function docente(){
    	// return view('docente.index');
    	// } 



     //  public function apoderado(){
    	// return view('apoderado.index');
    	// } 


}
