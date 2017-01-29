@extends('template')

@section('content')
    <div class="container" style="text-align: center;margin-bottom: 0%">
        <div class="jumbotron" style="background: #000000; color: #ffffff">
            <h1><b>Admin Panel</b></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6" style="text-align: center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Create Problem</h4>
                </div>
                <div class="panel-body">
                    <div class="row" style="margin: 1%">
                        <div class="col-sm-6">
                            <a href="{{ url('problem_show_all') }}" class="btn btn-default btn-block">SHOW ALL</a>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{ url('problem_hide_all') }}" class="btn btn-default btn-block">HIDE ALL</a>
                        </div>
                    </div>
                    <div class="row" style="margin: 1%">
                        <div class="col-sm-12">
                            <a href="{{ url('problem/create') }}" class="btn btn-success btn-block">CREATE</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            @foreach($problems as $problem)
                <div class="panel @if($problem->is_show == 1) panel-info @else panel-danger @endif">
                    <div class="panel-heading">
                        <h4>{{ $problem->name }}</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row" style="margin: 1%">
                            <div class="col-sm-6">
                                <a href="{{ url('problem/'.$problem->id."/change") }}" class="btn btn-default btn-block">
                                    @if($problem->is_show == 1)
                                        HIDE
                                    @else
                                        SHOW
                                    @endif
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{ url('problem/'.$problem->id) }}" class="btn btn-default btn-block">VIEW</a>
                            </div>
                        </div>
                        <div class="row" style="margin: 1%">
                            <div class="col-sm-6">
                                <a href="{{ url('problem/'.$problem->id.'/edit') }}" class="btn btn-warning btn-block">EDIT</a>
                            </div>
                            <div class="col-sm-6">
                                {!! Form::model($problem, ['method' => 'DELETE', 'url'=>'problem/'.$problem->id]) !!}
                                <button class="btn btn-danger btn-block" type="submit">DELETE</button>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-sm-3"></div>
    </div>
@stop