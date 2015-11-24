@extends('admin')

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Manage Users</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <table class='table table-bordered table-condensed table-striped table-hover'>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if(count($users))
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->first_name}} {{$user->last_name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role}}</td>
                    <td>
                        <div class='btn-group btn-group-xs'>
                            <a href="{{url('admin/users/edit/'.$user->id)}}" class='btn btn-primary'><i class='glyphicon glyphicon-edit'></i></a>
                            <a href="{{url('admin/users/delete/'.$user->id)}}" class='btn btn-danger'><i class='glyphicon glyphicon-trash'></i></a>
                        </div>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
        </table>
    </div><!-- /.box-body -->
</div><!-- /.box -->
@stop