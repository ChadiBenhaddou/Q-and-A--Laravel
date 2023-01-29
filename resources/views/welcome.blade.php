@extends('layouts.master')
@section('title', 'Welcome')
@section('content')
    <a href="/quiz">La page quiz</a><br>
    <a href="{{route('question.index')}}">La page question</a><br>
    <a href="{{route('result.index')}}">La page result</a>

@stop