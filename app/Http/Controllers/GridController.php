<?php
 
namespace App\Http\Controllers;
 
use App\People;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class GridController extends Controller{

    public function getData(){
        $products  = People::all();
        return response()->json($products); 
    }

    //data saving
    public function addData(Request $request){
        $prod = new People;
        $prod->fill($request->all());
        $prod->save();

        return response()->json(["id" => $prod->id]);
    }
    public function updateData($id, Request $request){
        $prod = People::find($id);
        $prod->fill($request->all());
        $prod->save();

        return response()->json(["status" => "ok"]);
    }
    public function removeData($id){
        $prod = People::find($id);
        $prod->delete();

        return response()->json(["status" => "ok"]);
    }

}