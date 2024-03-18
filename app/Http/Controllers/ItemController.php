<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        //create
            // Item::create([
            //     'name'=>'Laravel',
            //     'image'=>'/image/default.png'
            // ]);
            // Item::create([
            //     'name'=>'Flutter',
            //     'image'=>'/image/default.png'
            // ]);

                // $item = new Item();
                // $item->name = 'Flutter';
                // $item->image = '/image/default.png';
                // $item->save();

                //update
                // Item::where('id',2)->update([
                //     'name'=>'Update Flutter',
                //     'image'=>'/image/default.png'
                // ]);

                // $item = Item::find(2);
                // $item->name = 'Flutter';
                // $item->image = '/image/default.png';
                // $item->save();

                //delete
                // Item::where('id',2)->delete();

                // $item = Item::find(1);
                // $item->delete();
        //     die();

            $items=Item::all();
            // return $items;

            return view ('index',compact('items'));

        }
}
