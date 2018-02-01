@extends('layouts.admin')
@section('content')
<div class="col-md-12">
    <div class="card strpied-tabled-with-hover">
        <div class="card-header ">
            <h4 class="card-title">Role List</h4>
            <!-- <p class="card-category"></p> -->
        </div>
        <div class="card-body table-full-width table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ($roles as $role)
                    <tr>

                        <td>{{ $role->id}}</td>
                        <td>{{ $role->name }}</td>
                        <td><a href="{{ route('roles.create') }}" class="btn btn-primary">New</a></td>
                        <td><a href="{{ route('roles.edit',$role->id,'edit') }}" class="btn btn-info">Edit</a></td>
                        <td><a href="#" class="btn btn-danger">Delete</td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection