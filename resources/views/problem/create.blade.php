@extends('template')

@section('content')
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8" style="text-align: center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Create Problem</h2>
                </div>
                <div class="panel-body">
                    {!! Form::open(['url' => 'problem', 'class' => 'form-horizontal']) !!}

                    @include('problem._form')

                    {!! Form::submit('CREATE', ['class' => 'btn btn-success']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>
@stop