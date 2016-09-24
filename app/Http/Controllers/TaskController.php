<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TaskController extends Controller
{
    //show task insertion form
    public function index()
    {
    	return view('task.new');
    }
    public function saveTask(Requst $requst )
{
	$title=$request->input('title');
	$description=$request->input('description');

	}
}
