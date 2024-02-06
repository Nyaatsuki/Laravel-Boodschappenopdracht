<?php

namespace App\Http\Controllers;

use App\Models\Groceries;

class GroceriesController extends Controller
{
    #Get all groceries and display them on the Index page
    public function index()
    {

        #Get all groceries
        $groceries = Groceries::all();

        #If there are no groceries, No total should be calculated
        if ($groceries->isEmpty()) {
            $total = 0;
        }

        #Get the total cost of all groceries
        foreach ($groceries as $grocery) {
            $total[] =  number_format($grocery->price * $grocery->amount, 2);
        }

        return view('groceries/index', ['groceries' => $groceries, 'total' => $total]);
    }

    #Display the create page
    public function create()
    {
        return view('groceries/create');
    }

    #Store the groceries when they're created on the create page
    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'price' => 'required|decimal:2|',
            'amount' => 'required'
        ]);

        Groceries::create($attributes);

        return redirect("/");
    }

    #Edit grocery
    public function edit()
    {
        #Request the id of the grocery and find it's database entry
        $id = request()->route('grocery');
        $grocery = Groceries::find($id);

        return view('groceries/edit', ['grocery' => $grocery]);
    }

    public function update()
    {
        #TODO Update entry
        return 'UPDATE';
    }

    #Destroy the grocery based on it's ID requested via the route
    public function destroy()
    {
        $id = request()->route('grocery');

        $grocery = Groceries::find($id);
        $grocery->delete();

        return redirect("/");
    }
}
