@extends('layouts.master')
@section('title', 'Result')
@section('content')
<div class="container">
    <div class="row"><div class="col-sm-12 d-flex justify-content-center "><h2 class="mt-4 font-weight-bold">Result</h2></div></div>
    <div class="row">
        @csrf
        @foreach (Session::get('result') as $r)
                <div class="col-sm-4 mt-5 ">
                    <p class="text-primary">Message :  </p><h4>{{$r['result']}}</h4><br>
                    <p class="text-primary">Min Score :  </p>{{$r['min_score']}}<br>
                    <p class="text-primary">Max Score :  </p>{{$r['max_score']}}<br> <br>                   
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