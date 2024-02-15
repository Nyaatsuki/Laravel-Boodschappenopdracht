<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groceries extends Model
{
    use HasFactory;

    protected $fillable = ['category_id','name', 'amount', 'price'];

    protected $with = ['category'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
