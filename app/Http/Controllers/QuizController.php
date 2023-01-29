<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        return view('quiz.index');
    }

    public function store(Request $request)
    {
        session()->forget('answer');
 
        $arrayInp = [];
        foreach(Session::get('ques') as $qes){
            array_push($arrayInp,str_replace(" ","_",$qes['question']));
        }

        $les_inputs = $request->only($arrayInp);

        foreach(Session::get('ques') as $q){
            Session::push('answer', [ 'question' => $q['question'] , 'answer' => $les_inputs[str_replace(" ","_",$q['question'])]]);
        }
        
        return redirect(route('quiz.result'));
    }
}
