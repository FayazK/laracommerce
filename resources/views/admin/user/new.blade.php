@extends('admin')

@section('content')
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">New User</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        {!! Form::open(['class' => 'form-horizontal']) !!}
        <div class='form-group'>
            {!! Form::label('first_name','First name:', array('class' => 'col-sm-2 control-label')) !!}
            <div class='col-sm-10'>{!! Form::text('first_name',null,['class' => 'form-control']) !!}</div>
        </div>
        <div class='form-group'>
            {!! Form::label('last_name','Last name:', array('class' => 'col-sm-2 control-label')) !!}
            <div class='col-sm-10'>{!! Form::text('last_name',null,['class' => 'form-control']) !!}</div>
        </div>
        <div class='form-group'>
            {!! Form::label('email','Email:', array('class' => 'col-sm-2 control-label')) !!}
            <div class='col-sm-10'>{!! Form::email('email',null,['class' => 'form-control']) !!}</div>
        </div>
        <div class='form-group'>
            {!! Form::label('password','Password:', array('class' => 'col-sm-2 control-label')) !!}
            <div class='col-sm-10'>{!! Form::password('password',['class' => 'form-control']) !!}</div>
        </div>
        <div class='form-group'>
            {!! Form::label('role','Group:', array('class' => 'col-sm-2 control-label')) !!}
            <div class='col-sm-10'>{!! Form::select('role',$roles,1,['class'=>'form-control']) !!}</div>
        </div>
        <div class='col-sm-10 col-sm-offset-2'>{!! Form::submit('Add',['class' => 'btn btn-flat btn-primary']) !!}</div>
        {!! Form::close() !!}
    </div><!-- /.box-body -->
</div><!-- /.box -->
@stop