@extends('template')

@section('content')
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8" style="text-align: center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Edit Problem</h2>
                </div>
                <div class="panel-body">
                    {!! Form::model($problem, ['method' => 'PATCH', 'url' => 'problem/'.$problem->id, 'class' => 'form-horizontal']) !!}

                    @include('problem._form')

                    {!! Form::submit('FINISH', ['class' => 'btn btn-success']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>
@stop