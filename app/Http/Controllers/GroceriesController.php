<?php

namespace App\Http\Controllers;

use App\Models\Groceries;
use Illuminate\Http\Request;

class GroceriesController extends Controller
{
    public function index(){
        dd(Groceries::all());
    }
}
