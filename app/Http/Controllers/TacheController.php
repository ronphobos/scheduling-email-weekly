<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TacheController extends Controller
{
    //
    public function store(Request $request)
    {
        $data = $request->all();
       $task = new AddTask();
       $task->e_id = $data['e_id'];
       $task->e_name = $data['e_name'];
       $task->e_email = $data['e_email'];
       $task->manager_email = $data['manager_email'];
       $task->t_mon = $data['t_mon'];
       $task->t_tue = $data['t_tue'];
       $task->t_wed = $data['t_wed'];
       $task->t_thu = $data['t_thu'];
       $task->t_fri = $data['t_fri'];
       $task->save();
       return back()->with('status','ok');
    }
}
