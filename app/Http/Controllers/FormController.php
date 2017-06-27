<?php
 
namespace App\Http\Controllers;
 
use App\People;
use App\Group;
use App\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class FormController extends Controller{

    public function getData($id){
        $product  = People::find($id);
        return response()->json($product); 
    }

    public function getOptions(){
        $data = Group::all(["id", "name as value"]);
        return response()->json($data);
    }

    public function saveData(Request $request){
        $prod = People::find($request->input("id"));
        $prod->fill($request->all());
        $prod->save();

        return response()->json(["status" => "ok"]);
    }
    public function doUpload(Request $request){
        //in a real app you will move file to the persistent storage here
        $upload = $request->file('upload');
        $path = md5(time()).".".$upload->getClientOriginalExtension();
        $upload->move("./storage", $path);

        $store = new File;
        $store->name = $upload->getClientOriginalName();
        $store->path = $path;
        $store->save();

        return response()->json([
            "status" => "server",
            "value" =>  $store["id"]
        ]);
    }

}