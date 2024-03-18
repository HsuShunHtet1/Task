<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        //create

        // Task::create([
        //     'name'=>'Javascript',
        //     'image'=>'/image/flutter.png'
        // ]);

        // $item = new Item();
        // $item->name = "Test";
        // $item->image = "/image/test.png";
        // $item->save();

        //update

        // Task::where('id',2)->update([
        //     'name' => 'Update Flutter',
        //     'image' => '/image/updatefutter.png',
        // ]);

        // $item = Task::find(2);
        // $item->name = 'Update Flutter';
        // $item->image = '/image/updatefutter.png';
        // $item->save();

        //delete

        // Task::where('id',2)->delete();

        $task = Task::all();

        return view('index',compact('task'));



    }


}
