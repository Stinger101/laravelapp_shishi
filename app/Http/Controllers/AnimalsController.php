<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Animal;

class AnimalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if (! Gate::allows('manage_wildlife')) {
            return abort(401);
        }
        $animal = Animal::create($request->all());



        return redirect('admin/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        if (! Gate::allows('manage_wildlife')) {
            return abort(401);
        }
        $animal = Animal::findOrFail($id);
        $animal->update($request->all());

        return redirect('admin\home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if (! Gate::allows('manage_wildlife')) {
            return abort(401);
        }
        $animal = Animal::findOrFail($id);
        $animal->delete();

        return redirect('admin\home');
    }
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('manage_wildlife')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Animal::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
}
}
