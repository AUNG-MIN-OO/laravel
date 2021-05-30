<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FormController extends Controller
{
    public function create()
    {
        return view('request_response.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|min:3|max:10",
            "price" => "required|integer|min:1|max:100000",
            "stock" => "required|integer|min:1|max:10"
        ]);

        $item = new Item();
        $item -> name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;
        $item->save();

        return redirect()->route("form.create")->with("status",$request->name."is added");

    }
    public function destroy($id){
        $currentItem = Item::find($id);
        $currentItemName = $currentItem->name;
        $currentItem->delete();
        return redirect()->route("form.create")->with("status1",$currentItemName."is deleted");
    }

    public function edit($id){
        $currentItem = Item::find($id);
        return view("request_response.edit",compact('currentItem'));
    }

    public function update($id,Request $request){
        $currentItem = Item::find($id);
        $currentItem->name = $request->name;
        $currentItem->price = $request->price;
        $currentItem->stock = $request->stock;
        $currentItem->update();
        return redirect()->route("form.create")->with("status1","Item No".$request->id."is updated");
    }
}


