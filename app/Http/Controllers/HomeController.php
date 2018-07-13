<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Animal;
use App\Checkup;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (Gate::allows('users_manage')) {
        // code...
        return view('home');
      }elseif (Gate::allows('manage_wildlife')) {
        // code...
        $animals=Animal::all();
        return view('pages.manager',compact('animals'));
      }elseif (Gate::allows('vet_wildlife')) {
        // code...
        $animals=Animal::get()->pluck('name','id');
        $checkups=Checkup::with('animal')->get();
        return view('pages.vet',compact('animals','checkups'));
      }else {
        // code...
        return abort(401);
      }

    }
}
