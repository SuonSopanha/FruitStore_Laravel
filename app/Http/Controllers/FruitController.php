<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    public function index(){
        return view('homepage', [
            'fruitList' => Fruit::latest()->filters(request(['origin','search']))->get()
        ]);
    }

    public function show($id){
        $fruitList = Fruit::find($id);

        if(!$fruitList){
            abort(404);
        }else{
            return view('fruit', [
                'fruit' => $fruitList
            ]);
        }
    }
}
