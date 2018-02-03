 @extends('layouts.admin')

 @section('content')
  <div class="col-md-8">
    <div class="card">
        <div class="card-header">
        	
                <h4 class="card-title">
                    @if(isset($order))
                        Edit Order
                    @else
                        ADD Order
                    @endif
                </h4>
        </div>
        <div class="card-body">
             @if(isset($order))
                {!! Form::model(
                    $order, ['route' => ['orders.update', $order->id],'method'=>'PATCH']
                    ) !!}
             @else
                {!! Form::open(['url' => 'orders']) !!}
             @endif
                <div class="row">
                    <div class="col-md-6 pr-1">
                        <div class="form-group">
                            {!! Form::label('name', 'Role Name'); !!}
                            {!! Form::text('name', null,['class' =>'form-control']); !!}
                            <!-- <input type="text" class="form-control" placeholder="Company" value=""> -->
                        </div>
                    </div>
                  
                </div>
                @if(isset($order))
                    {!! Form::submit('UPDATE ORDER',['class' =>'btn btn-info btn-fill']); !!}
                @else
                    {!! Form::submit('ADD ORDER',['class' =>'btn btn-info btn-fill']); !!}
                @endif
                <!-- <button type="submit" class="btn btn-info btn-fill">ADD ROLE</button> -->
                <div class="clearfix"></div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection