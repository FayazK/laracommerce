@extends('admin')

@section('content')
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Settings</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <form action="{{url('admin/settings/save')}}" method="post" class="form-horizontal">
            {!! csrf_field() !!}
            <div class="form-group">
                <label class="col-sm-2 control-label">Name:</label>
                <div class="col-sm-10"><input type="text" name="site_name" value="{{get_settings('site_name')}}" class="form-control" /></div>
            </div>
            <div class='col-sm-10 col-sm-offset-2'>
                <button type="submit" class="btn btn-flat btn-primary"><i class='fa fa-check'></i> Save</button>
            </div>
        </form>
    </div><!-- /.box-body -->
</div><!-- /.box -->
@stop