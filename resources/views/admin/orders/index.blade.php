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
                    <h4 class="card-title">Order List</h4>
                </div>
                <div class="col-md-6">
                    <td><a href="{{ route('orders.create') }}" class="btn btn-primary pull-right">New</a></td>
                </div>
            </div>
            <!-- <p class="card-category"></p> -->
        </div>
        <div class="card-body table-full-width table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Event Name</th>
                        <th>User Name</th>
                        <th>No Of Purchase Ticket</th>
                        <th>Total Price</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ($orders as $order)
                    <tr>

                        <td>{{ $order->id}}</td>
                        <td>{{ $order->event_id }}</td>
                        <td>{{ $order->user_id}}</td>
                        <td>{{ $order->no_of_purchase_ticket}}</td>
                        <td>{{ $order->total_price }}</td>
                        
                        
                       
                        <td><a href="{{ route('order.edit',$order->id,'edit') }}" class="btn btn-info">Edit</a></td>
                        <td>
                            {!! Form::open(
                                    array(
                                        'route' => array('orders.destroy', $order->id),
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