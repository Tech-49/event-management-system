 @extends('layouts.admin')
 @section('content')
  <div class="col-md-8">
    <div class="card">
        <div class="card-header"> 	
        <h4 class="card-title">
            @if(isset($event))
                Edit Events
            @else
                ADD Events
            @endif
        </h4>
        </div>
        <div class="card-body">
            
             @if(isset($event))
                {!! Form::model(
                    $event, ['route' => ['events.update', $event->id],'method'=>'PATCH','files'=>true]
                    ) !!}
             @else
                {!! Form::open(['url' => 'events','files'=>true]) !!}
             @endif
                <div class="row">
                    <div class="col-md-6 pr-1">
                        <div class="form-group">
                            {!! Form::label('name', 'Event Name'); !!}
                            {!! Form::text('name', null,['class' =>'form-control']); !!}
                            <!-- <input type="text" class="form-control" placeholder="Company" value=""> -->
                        </div>
                        <div class="form-group">
                            {!! Form::label('description', 'Description'); !!}
                            {!! Form::textarea('description', null,['class' =>'form-control']); !!}
                            <!-- <input type="text" class="form-control" placeholder="Company" value=""> -->
                        </div>
                        <div class="form-group">
                            {!! Form::label('location', 'Location'); !!}
                            {!! Form::text('location', null,['class' =>'form-control']); !!}
                            <!-- <input type="text" class="form-control" placeholder="Company" value=""> -->
                        </div>
                        <div class="form-group">
                            {!! Form::label('picture', 'Picture'); !!}
                            {!! Form::file('picture', null,['class' =>'form-control']); !!}
                            <!-- <input type="text" class="form-control" placeholder="Company" value=""> -->
                            @if(isset($event))
                            <img src='{{ asset("img/$event->picture") }}' height="50" width="50"/>
                            @endif
                        </div>
                        <div class="form-group">
                            {!! Form::label('no_of_ticket', 'No Of Ticket'); !!}
                            {!! Form::text('no_of_ticket', null,['class' =>'form-control']); !!}
                            <!-- <input type="text" class="form-control" placeholder="Company" value=""> -->
                        </div>
                        <div class="form-group">
                            {!! Form::label('price', 'Price'); !!}
                            {!! Form::text('price', null,['class' =>'form-control']); !!}
                            <!-- <input type="text" class="form-control" placeholder="Company" value=""> -->
                        </div>
                        <div class="form-group">

                            {!! Form::label('start_date', 'Start Date'); !!}
                            @if(isset($event))
                            {!! Form::date('start_date', null,['class' =>'form-control']); !!}
                            @else
                            {!! Form::date('start_date', \Carbon\Carbon::now(),['class' =>'form-control']); !!}
                            @endif
                            <!-- <input type="text" class="form-control" placeholder="Company" value=""> -->
                        </div>
                        <div class="form-group">
                            {!! Form::label('end_date', 'End Date'); !!}
                            @if(isset($event))
                            {!! Form::date('end_date', null,['class' =>'form-control']); !!}
                            @else
                            {!! Form::date('end_date', \Carbon\Carbon::now(),['class' =>'form-control']); !!}
                            @endif

                            
                            <!-- <input type="text" class="form-control" placeholder="Company" value=""> -->
                        </div>
                       
                    </div>
                </div>
                @if(isset($event))
                    {!! Form::submit('UPDATE Event',['class' =>'btn btn-info btn-fill']); !!}
                @else
                    {!! Form::submit('ADD Event',['class' =>'btn btn-info btn-fill']); !!}
                @endif
                <!-- <button type="submit" class="btn btn-info btn-fill">ADD ROLE</button> -->
                <div class="clearfix"></div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection