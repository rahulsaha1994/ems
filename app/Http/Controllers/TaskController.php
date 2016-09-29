<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use Redirect;
use Input;
use Illuminate\Http\Request;
use App\Http\Requests;

class TaskController extends Controller
{
	protected $users;
	
	public function __construct(){
        $this->middleware(function ($request, $next) {
            $this->user_id = Auth::user()->id;
			$this->curr_timestamp = strtotime(date("Y-m-d H:i:s"));
            return $next($request);
        });
    }
    //show task insertion form
    public function index()
    {
    	return view('task.new');
    } 
	public function saveTask(Request $request)
	{
		try{
			DB::table('schedule')->insert(
	                        [   'title' => trim($request->input('title')),
	                        	'description' => trim($request->input('description')),
	                        	'start_time' => trim($request->input('start_time')),
	                        	'end_time' => trim($request->input('end_time')),
	                            'created_by' => $this->user_id,
	                            'auto_id' => uniqid(),
	                            'updated_at' => date("Y-m-d H:i:s")
	                        ]
	                    );
			$status = TRUE;
		}catch(\Exception $e){
	        $status = FALSE; 
	     }
	     if($status){
	     	return Redirect('task');
	     }
	     else{
	     	return Redirect('task');
	     }
	}
}