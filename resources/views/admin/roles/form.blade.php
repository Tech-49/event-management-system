 @extends('layouts.admin')

 @section('content')
  <div class="col-md-8">
    <div class="card">
        <div class="card-header">
        	@if(isset($roles))
                <h4 class="card-title">Edit Roles</h4>
            @else
                <h4 class="card-title">ADD Roles</h4>
            @endif
        </div>
        <div class="card-body">
            {!! Form::open(['url' => 'roles']) !!}
                <div class="row">
                    <div class="col-md-6 pr-1">
                        <div class="form-group">
                            {!! Form::label('name', 'Role Name'); !!}
                            {!! Form::text('name', null,['class' =>'form-control']); !!}
                            <!-- <input type="text" class="form-control" placeholder="Company" value=""> -->
                        </div>
                    </div>
                  
                </div>
                 {!! Form::submit('ADD ROLE',['class' =>'btn btn-info btn-fill']); !!}
                <!-- <button type="submit" class="btn btn-info btn-fill">ADD ROLE</button> -->
                <div class="clearfix"></div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection