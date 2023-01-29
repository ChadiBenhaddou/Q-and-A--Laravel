<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index()
    {
        return view('result.index');
    }


    public function create()
    {
        return view('result.create');
    }

    public function store(Request $request)
    {
        return redirect(route('result'));
    }

 
    public function edit($id)
    {
        return view('result.edit');
    }

    public function update(Request $request, $id)
    {
        return redirect(route('result'));
    }

    public function destroy($id)
    {
        return redirect(route('result'));
    }
}
