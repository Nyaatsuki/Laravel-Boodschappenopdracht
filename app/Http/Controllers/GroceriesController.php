<?php

namespace App\Http\Controllers;

use App\Models\Groceries;
use Illuminate\Http\Request;

class GroceriesController extends Controller
{
    public function index(){
        echo('Name: Price <br>');
        $groceries = Groceries::all();

        foreach($groceries as $grocery){
            echo $grocery->name . ": €" . $grocery->price;
            echo '<br>';
        }
    }
}
