<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $categories = Category::all();

        return view('groceries/create', ['categories' => $categories]);
    }

    #Store the groceries
    public function store()
    {
        #Validate groceries
        $attributes = request()->validate([
            'category_id' => 'required',
            'name' => 'required|min:2',
            'price' => 'required|decimal:2|',
            'amount' => 'required|gt:0'
        ]);
        
        Groceries::create($attributes);
        
        return redirect("/");
    }

    #Display edit view with grocery parameters
    public function edit()
    {
        $id = request()->route('grocery');
        $grocery = Groceries::find($id);
        $categories = Category::all();

        return view('groceries/edit', ['grocery' => $grocery, 'categories' => $categories]);
    }

    #Update the grocery parameters
    public function update()
    {
        $id = request()->route('grocery');
        $grocery = Groceries::find($id);

        #Validate inputs and update accordingly
        if ($grocery) {
            $attributes = request()->validate([
                'category_id' => 'required',
                'name' => 'required|min:2',
                'price' => 'required|decimal:2|',
                'amount' => 'required|gt:0'
            ]);
            $grocery->update($attributes);
        }

        return redirect("/");
    }

    #Destroy the grocery
    public function destroy()
    {
        $id = request()->route('grocery');
        $grocery = Groceries::find($id);

        $grocery->delete();

        return redirect("/");
    }
}
