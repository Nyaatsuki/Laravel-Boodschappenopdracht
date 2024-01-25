<?php

namespace App\Http\Controllers;

use App\Models\Groceries;
use Illuminate\Http\Request;

class GroceriesController extends Controller
{
    #Get all groceries and display them on the Index page
    public function index(){
        $groceries = Groceries::all();

        #Get the total cost of all groceries
        foreach ($groceries as $grocery){
            $total[] =  number_format($grocery->price * $grocery->amount, 2);
         }         

        return view('groceries/index', ['groceries' => $groceries, 'total' => $total]);
    }

    public function create(){
        return view('groceries/create');
    }
    
    public function store(){
        $attributes = request()->validate([
            'name' => 'required',
            'price' => 'required|decimal:2|',
            'amount' => 'required'
        ]);

        Groceries::create($attributes);

        return redirect("/");
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
