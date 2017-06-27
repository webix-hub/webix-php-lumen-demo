<?php
 
namespace App\Http\Controllers;
 
use App\Document;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class DynamicGridController extends Controller{


    //dynamic data loading
    public function getData(Request $request){
        $data = Document::query();

        $filter = $request->input('filter', false);
        $sort = $request->input('sort', false);

        //filtering
        if ($filter)
            foreach($filter as $key => $value){
                $data = $data->where($key, "like", "%$value%");
            }

        //sorting
        if ($sort)
            foreach($sort as $key => $value){
                $data = $data->orderBy($key, $value);
            }

        $total = $data->count();
        $start = $request->input('start', 0);
        $count = $request->input('count', 20);

        $data  = $data->limit($count)->offset($start)->get();

        return response()->json([
            "total_count" => $total,
            "pos" =>  $start,
            "data" => $data
        ]);
    }

}