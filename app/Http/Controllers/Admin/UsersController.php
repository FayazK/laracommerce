<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use yajra\Datatables\Datatables;
use Laracasts\Flash\Flash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.list');
    }
    
    public function listUsers()
    {
        $users = \App\User::leftJoin('role_user','users.id','=','role_user.user_id')
                ->leftJoin('roles','role_user.role_id','=','roles.id')
                ->select([
                    'roles.name as role',
                    'users.email as email',
                    'users.id as id',
                    'users.created_at as registered'
                    ])
                ->addSelect(\Illuminate\Support\Facades\DB::raw('CONCAT(users.first_name," " ,users.last_name) as name'))
                ->get();
        $actions = '
            <div class="btn-group btn-group-xs">
                <a href="{{url(\'admin/users/profile/\'.$id)}}" class="btn btn-success btn-flat"><i class="fa fa-eye"></i></a>
                <a href="{{url(\'admin/users/edit/\'.$id)}}" class="btn btn-primary btn-flat"><i class="fa fa-pencil"></i></a>
                <a href="{{url(\'admin/users/delete/\'.$id)}}" class="btn btn-danger btn-flat"><i class="fa fa-trash"></i></a>
            </div>
        ';
        return DataTables::of($users)
                ->addColumn('actions',$actions)
                ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = \App\Role::lists('name','id');
        return view('admin.user.new')->with('roles',$roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = \App\User::create($input);
        $user->attachRole(['id' => $input['role']]);
        Flash::success('User created successfully');
        return redirect('admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
