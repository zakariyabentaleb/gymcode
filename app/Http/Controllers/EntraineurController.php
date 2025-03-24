<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class EntraineurController extends Controller
{
    public function index()
    {
       
        $trainers = Trainer::all();
          
        
        return view('admin.create-program', compact('trainers'));
    }
}
