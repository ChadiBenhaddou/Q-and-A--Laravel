@extends('layouts.master')
@section('title', 'Question')
@section('content')
<div class="container">
    <div class="row"><div class="col-sm-12 d-flex justify-content-center "><h2 class="mt-4 font-weight-bold">Create question</h2></div></div>
    <div class="row">
        <div class="col-sm-3 mt-5 ">
            <form action="{{}}" method="post">
                @csrf
                <input type="text" name="question" placeholder="Quesrion">
                <input type="text" name="answer1" placeholder="answer1" class="mb-2" >
                <input type="text" name="answer2" placeholder="answer2" class="mb-2" >
                <input type="text" name="answer3" placeholder="answer3" class="mb-2" >
                <input type="text" name="answer4" placeholder="answer4" class="mb-2" >
                <button type="submit" class="btn btn-primary">Add writer</button>
            </form>
        </div>
    </div>
</div>
@stop