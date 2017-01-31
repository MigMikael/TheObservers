@extends('template')

@section('content')
    <div class="row" style="margin-bottom: 3%">
        <div class="col-sm-2"></div>
        <div class="col-sm-8" style="text-align: center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>{{ $problem->name }}</h2>
                </div>
                <div class="panel-body" style="padding: 5%">
                    <br>
                    <h4>{!! $problem->content !!}</h4>
                    <br>
                </div>
                <div class="panel-footer col-sm-12">
                    {!! Form::open(['url' => 'reply_answer', 'class' => 'form-horizontal']) !!}
                    <div class="form-group">
                        {!! Form::label('answer', 'Answer: ', ['class' => 'control-label col-sm-2']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('content', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    {!! Form::hidden('problem_id', $problem->id) !!}
                    {!! Form::hidden('user_id', Auth::user()->id) !!}
                    {!! Form::submit('SUBMIT', ['class' => 'btn btn-success']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>

    <div class="row" style="margin-bottom: 3%">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Your Answer</h2>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Time</th>
                            <th>Correct</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $count = 0;
                        @endphp
                        @foreach($problem->answers as $answer)
                            @if($answer->user_id == Auth::user()->id)
                            <tr class="@if($answer->is_correct) success @else danger @endif">
                                <td>{{ ++$count }}</td>
                                <td>{{ $answer->created_at }}</td>
                                <td>
                                    @if($answer->is_correct)
                                        <span class="glyphicon glyphicon-ok"></span>
                                    @else
                                        <span class="glyphicon glyphicon-remove"></span>
                                    @endif
                                </td>
                            </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>

    <div class="row" style="margin-bottom: 3%">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="panel panel-default">
                <div class="panel-body" style="text-align: center;">
                    <div class="btn-group">
                        <a href="{{ url('problem_prev/'.$problem->id) }}" class="btn-success btn-lg" style="margin: 1%;">
                            <span class="glyphicon glyphicon-arrow-left"></span> Prev
                        </a>
                        <a href="{{ url('problem') }}" class="btn-primary btn-lg" style="margin: 1%">
                            <span class="glyphicon glyphicon-home"></span>
                        </a>
                        <a href="{{ url('problem_next/'.$problem->id) }}" class="btn-success btn-lg" style="margin: 1%">
                            Next <span class="glyphicon glyphicon-arrow-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>

    <div class="row" style="margin-bottom: 3%">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        </div>
        <div class="col-sm-2"></div>
    </div>
@stop