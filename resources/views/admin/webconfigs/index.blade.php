@extends('layouts.admin')
@section('content')
 @if (session('success_message'))
    <div class="alert alert-success">
        {{ session('success_message') }}
    </div>
@endif
<div class="col-md-12">
    <div class="card strpied-tabled-with-hover">
        <div class="card-header ">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="card-title">Web Config List</h4>
                </div>
                <div class="col-md-6">
                    <td><a href="{{ route('webconfigs.create') }}" class="btn btn-primary" style="float:right;margin-right:50px;">New</a></td>
                </div>                
            </div>
            <div class="clearfix"></div>
            <!-- <p class="card-category"></p> -->
        </div>
        <div class="card-body table-full-width table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Key</th>
                        <th>Value</th>
                       
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ($webconfigs as $webconfig)
                    <tr>

                        <td>{{ $webconfig->id}}</td>
                        <td>{{ $webconfig->key }}</td>
                        <td>{{ $webconfig->value }}</td>
                       
                        <td><a href="{{ route('webconfigs.edit',$webconfig->id,'edit') }}" class="btn btn-info">Edit</a></td>
                        <td>
                            {!! Form::open(
                                    array(
                                        'route' => array('webconfigs.destroy', $webconfig->id),
                                        'method'=> 'DELETE'
                                    )
                                )
                            !!}
                            <button type='submit' class="btn btn-danger">
                                Delete
                            </button>
                            {!! Form::close() !!}
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection