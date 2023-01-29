@extends('layouts.master')
@section('title', 'Result')
@section('content')
<div class="container">
    <div class="row"><div class="col-sm-12 d-flex justify-content-center "><h2 class="mt-4 font-weight-bold">Create question</h2></div></div>
    <div class="row">
        <div class="col-sm-3 mt-5 ">
            <form action="{{}}" method="post">
                @csrf
                <input type="text" name="result" placeholder="Result">
                <input type="text" name="min_score" placeholder="min_score" class="mb-2" >
                <input type="text" name="max_score" placeholder="max_score" class="mb-2" >
                <button type="submit" class="btn btn-primary">Create question</button>
            </form>
        </div>
    </div>
</div>
@stop