<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $fileContent=json_decode(file_get_contents(base_path("products.json")),true);  
         return response($fileContent);
    }

    public function show($id)
    {
        $fileContent=json_decode(file_get_contents(base_path("products.json")),true);  
        foreach($fileContent as $product)
        {
            if($product['id']==$id)
              {
                return response()->json($product,200);
              }
        }

        return response()->json(['message'=>'there is no product']);
    }
}
