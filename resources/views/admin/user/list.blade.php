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
        <table class='table table-bordered table-condensed table-striped table-hover' id='users-table'>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Reg Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
        </table>
    </div><!-- /.box-body -->
</div><!-- /.box -->
@stop
@push('footer-scripts')
<script>
    jQuery(function($) {
        $(function() {
            $('#users-table').DataTable({
                stateSave: true,
                processing: true,
                serverSide: true,
                ajax: '{!! route('listusers') !!}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'role', name: 'role'},
                    {data: 'registered', name: 'registered'},
                    {data: 'actions', name: 'registered'}
                    
                ]
            });
        });
    });
</script>
@endpush