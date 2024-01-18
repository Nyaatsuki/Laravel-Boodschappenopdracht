<?php

namespace App\Http\Controllers;

use App\Models\Groceries;
use Illuminate\Http\Request;

class GroceriesController extends Controller
{
    public function index(){
        $groceries = Groceries::all();

        foreach ($groceries as $grocery){
            $total[] =  number_format($grocery->price * $grocery->amount, 2);
         }         

        return view('groceries/index', ['groceries' => $groceries, 'total' => $total]);;
    }

    public function create(){
        return view('groceries/create');
    }
    
    public function store(){
        return "Store";
    }

    public function edit(){
        return view('groceries/edit');
    }

    public function update(){
        return "Update";
    }

    public function destroy(){
        return "DELETE, DELETE, DELETE";
    }
}
