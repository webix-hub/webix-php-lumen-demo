<?php
 
namespace App\Http\Controllers;
 
use App\People;
use App\Document;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class TreeController extends Controller{

    public function getAll(){
        $data = People::all(["id", "name"])->toArray();

        $result = [];
        foreach ($data as $value){
            $sub = Document::where("userId", $value["id"])->get(["id", "name as value"]);
            $result[] = [
                "id" => "u".$value["id"],
                "value" => $value["name"],
                "data" => $sub->toArray()
            ];
        }

        return response()->json($result);
    }

    public function getLevel(Request $request){
        $id = $request->input('parent', 0);
        if (!$id){
            $data = People::all()->toArray();
            foreach ($data as $key => $value) {
                $data[$key]["id"] = "u".$value["id"];
                $data[$key]["webix_kids"] = true;
            }
        }
        else {
            $parent = str_replace("u", "", $id);
            $data = Document::where(["userId" => $parent])->get();
        }

        return response()->json([ "parent" => $id, "data" => $data ]);
    }
}