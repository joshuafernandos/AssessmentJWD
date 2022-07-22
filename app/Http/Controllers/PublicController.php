<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    public function index()
    {
        return view('index', [
            'category' => Category::all(),
            'nav' => 'home'
        ]);
    }
    public function show(Category $category)
    {
        return view('show', [
            'category' => $category,
            'title' => "AKAP BUS | $category->name"
        ]);
    }
    public function login()
    {
        return view('user.login', [
            'title' => 'AKAP BUS | Please Login'
        ]);
    }
    public function register()
    {
        return view('user.register', [
            'title' => 'AKAP BUS | Please Register'
        ]);
    }
    public function invoice()
    {
        $data = DB::table('order')->where('user_id', auth()->user()->id)->get();

        return view('user.invoice', [
            'title' => 'AKAP BUS | Invoices',
            'nav' => 'invoice',
            'order' =>  $data
        ]);
    }
}
