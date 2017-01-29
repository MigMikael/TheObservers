@extends('template')

@section('content')

    <div class="container" style="width: 100%; text-align: center">
        <div class="jumbotron" style="background: #000000; color: #ffffff; margin-bottom: 0%">
            <h1><b>Problem</b></h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4" style="text-align: center">
            @foreach($problems as $problem)
                <a href="{{ url('problem/'.$problem->id) }}">
                    <div class="well">
                        <h2>{!! $problem->name !!}</h2>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="col-sm-4"></div>
    </div>

    <div class="row" style="margin-bottom: 3%">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        </div>
        <div class="col-sm-2"></div>
    </div>
@stop