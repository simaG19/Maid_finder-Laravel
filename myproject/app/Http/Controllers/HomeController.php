<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $num_per_page = 5;

        $page = $request->get('page', 1);
        $start_from = ($page - 1) * $num_per_page;

        $companies = DB::table('user_form')
            ->where('user_type', 'company')
            ->offset($start_from)
            ->limit($num_per_page)
            ->get();

        $total_records = DB::table('user_form')
            ->where('user_type', 'company')
            ->count();

        $total_pages = ceil($total_records / $num_per_page);

        return view('home', compact('companies', 'total_pages', 'page'));
    }
}
