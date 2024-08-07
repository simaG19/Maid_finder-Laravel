<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pros; 

class ProsController extends Controller
{
 
    public function index(){
        return view("pros.index");

    }
    //
    public function create(){
        return view("pros.create");

    }

    public function store(Request $request){
        $data=$request->validate([
            "name"=> "required",
            "qty"=> "required",
            "description"=> "required",
            "price"=> "required",
        ]);

$newPors = pros::create($data);
return redirect(route("pros.index"));
    
    }
}

