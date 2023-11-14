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
        echo "W.I.P";
    }

    public function edit(){
        echo "W.I.P";
    }
}
