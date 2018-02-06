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
                    <h4 class="card-title">Event List</h4>
                </div>
                <div class="col-md-6">
                    <td><a href="{{ route('events.create') }}" class="btn btn-primary" style="float:right;margin-right:50px;">New</a></td>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- <p class="card-category"></p> -->
        </div>
        <div class="card-body table-full-width table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Picture</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>No Of Ticket</th>
                        <th>Price</th>
                        <th>S_Date</th>
                        <th>E_Date</th>
                        <th>User Name</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ($events as $event)
                    <tr>

                        <td>{{ $event->id}}</td>
                        <td><img src='{{ asset("img/$event->picture") }}' height="50" width="50"/></td>
                        <td>{{ $event->name }}</td>
                        <td>{{ $event->location}}</td>
                        
                        <td>{{ $event->no_of_ticket}}</td>
                        <td>{{ $event->price }}</td>
                        <td>{{ $event->start_date }}</td>
                        <td>{{ $event->end_date }}</td>
                        <td>{{ $event->user['name']}}</td>
                        
                       
                        <td><a href="{{ route('events.edit',$event->id,'edit') }}" class="btn btn-info">Edit</a></td>
                        <td>
                            {!! Form::open(
                                    array(
                                        'route' => array('events.destroy', $event->id),
                                        'method'=> 'DELETE'
                                    )
                                )
                            !!}
                            <button type='submit' class="btn btn-danger" style="margin-top:8px;">
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