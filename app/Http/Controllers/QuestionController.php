<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function index()
    {
        return view('question.index');
    }


    public function create()
    {
        return view('question.create');
    }

    public function store(Request $request)
    {
        return redirect(route('question'));
    }

 
    public function edit($id)
    {
        return view('question.edit');
    }

    public function update(Request $request, $id)
    {
        return redirect(route('question'));
    }

    public function destroy($id)
    {
        return redirect(route('question'));
    }
}
