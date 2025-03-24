<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use App\Models\Category;
use Illuminate\Http\Request;

class EntraineurController extends Controller
{
    public function index()
    {
       
        $trainers = Trainer::all();
          
        $categories = Category::all();
        
        return view('admin.create-program', compact('trainers','categories'));
    }
}
