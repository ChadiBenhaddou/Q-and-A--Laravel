@extends('layouts.master')
@section('title', 'Question')
@section('content')
<div class="container">
    <div class="row"><div class="col-sm-12 d-flex justify-content-center "><h2 class="mt-4 font-weight-bold">Question</h2></div></div>
    <div class="row">
        @csrf
        @foreach (Session::get('ques') as $question)
                <div class="col-sm-4 mt-5 ">
                    <h3>{{$question['question']}}</h3>
                    <p class="text-primary">Answer 1 :  </p>{{$question['answer1']}}<br>
                    <p class="text-primary">Answer 2 :  </p>{{$question['answer2']}}<br>
                    <p class="text-primary">Answer 3 :  </p>{{$question['answer3']}}<br>
                    <p class="text-primary">Answer 4 :  </p>{{$question['answer4']}}<br>
                    <p class="text-primary">Correct_answer :  </p>{{$question['correct_answer']}}<br>                    
                    <form action="" method="POST">
                        @csrf
                        @method('delete')
                        <button>Suprimmer</button>
                    </form>
                    <form action="" method="get">
                        @csrf
                        <button>Modifier</button>
                    </form>
                </div>
        @endforeach
        </div>
</div>

@stop