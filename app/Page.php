<?php

namespace App;
 
class Page{
    static public function all(){
        return [
            [ "name"=>"Data Table", "data"=>[
                [ "name" => "Loading and Saving", "url" => "grid"],
                [ "name" => "Dynamic Loading", "url" => "grid-dynamic"],
                [ "name" => "Paging", "url" => "grid-paging"],
            ]],
            [ "name"=>"Tree", "data"=>[
                [ "name" => "Data Loading", "url" => "tree"],
            ]],
            [ "name"=>"Form", "data"=>[
                [ "name" => "Loading and Saving", "url" => "form"],
                [ "name" => "File Uploading", "url" => "form-uploading"],
            ]]
        ];
    }
}
