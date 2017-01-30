<div class="form-group">
    {!! Form::label('name', 'Name ', ['class' => 'control-label col-sm-2']) !!}
    <div class="col-sm-10">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}<br>
    </div>
</div>

<div class="form-group">
    {!! Form::label('content', 'Content ', ['class' => 'control-label col-sm-2']) !!}
    <div class="col-sm-10">
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}<br>
    </div>
</div>
<p>ส่วน Content สามารถใส่แท็ก html ได้ทั้งหมด (ยกเว้น h1 h3 h5 และ p)</p>

<div class="form-group">
    {!! Form::label('answer', 'Answer ', ['class' => 'control-label col-sm-2']) !!}
    <div class="col-sm-10">
        {!! Form::text('answer', null, ['class' => 'form-control']) !!}<br>
    </div>
</div>

<div class="form-group">
    {!! Form::label('point', 'Point ', ['class' => 'control-label col-sm-2']) !!}
    <div class="col-sm-10">
        {!! Form::number('point', null, ['class' => 'form-control', 'step' => '0.1']) !!}<br>
    </div>
</div>

<div class="form-group">
    {!! Form::label('show/hide', 'Show/Hide ', ['class' => 'control-label col-sm-2']) !!}
    <div class="col-sm-10">
        {!! Form::select('is_show', ['1' => 'Show', '0' => 'Hide'], null,['class' => 'form-control col-sm-12']) !!}<br>
    </div>
</div>