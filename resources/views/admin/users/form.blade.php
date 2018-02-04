 @extends('layouts.admin')
 @section('content')
  <div class="col-md-8">
    <div class="card">
        <div class="card-header"> 	
        <h4 class="card-title">
            @if(isset($user))
                Edit User
            @else
                ADD User
            @endif
        </h4>
        </div>
        <div class="card-body">
            
             @if(isset($user))
                {!! Form::model(
                    $user, ['route' => ['users.update', $user->id],'method'=>'PATCH','files'=>true]
                    ) !!}
             @else
                {!! Form::open(['url' => 'users','files'=>true]) !!}
             @endif
                <div class="row">
                    <div class="col-md-6 pr-1">
                        <div class="form-group">
                            {!! Form::label('name', 'Name'); !!}
                            {!! Form::text('name', null,['class' =>'form-control']); !!}
                            <!-- <input type="text" class="form-control" placeholder="Company" value=""> -->
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email'); !!}
                            {!! Form::text('email', null,['class' =>'form-control']); !!}
                            <!-- <input type="text" class="form-control" placeholder="Company" value=""> -->
                        </div>
                        <div class="form-group">
                            {!! Form::label('password', 'Password'); !!}
                            {!! Form::text('password', null,['class' =>'form-control']); !!}
                            <!-- <input type="text" class="form-control" placeholder="Company" value=""> -->
                        </div>
                        <div class="form-group">
                            {!! Form::label('address', 'Address'); !!}
                            {!! Form::textarea('address', null,['class' =>'form-control']); !!}
                            <!-- <input type="text" class="form-control" placeholder="Company" value=""> -->
                        </div>
                         <div class="form-group">
                            {!! Form::label('phone_no', 'Phone No'); !!}
                            {!! Form::text('phone_no', null,['class' =>'form-control']); !!}
                            <!-- <input type="text" class="form-control" placeholder="Company" value=""> -->
                        </div>
                        <div class="form-group">
                            {!! Form::label('pincode', 'Pincode'); !!}
                            {!! Form::text('pincode', null,['class' =>'form-control']); !!}
                            <!-- <input type="text" class="form-control" placeholder="Company" value=""> -->
                        </div>
                        <div class="form-group">
                            {!! Form::label('profilepic', 'Picture'); !!}
                            {!! Form::file('profilepic', null,['class' =>'form-control']); !!}
                            <!-- <input type="text" class="form-control" placeholder="Company" value=""> -->
                        </div>
                        
                    </div>
                </div>
                @if(isset($user))
                    {!! Form::submit('UPDATE USER',['class' =>'btn btn-info btn-fill']); !!}
                @else
                    {!! Form::submit('ADD USER',['class' =>'btn btn-info btn-fill']); !!}
                @endif
                <!-- <button type="submit" class="btn btn-info btn-fill">ADD ROLE</button> -->
                <div class="clearfix"></div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection