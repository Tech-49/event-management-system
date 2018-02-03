 @extends('layouts.admin')

 @section('content')
  <div class="col-md-8">
    <div class="card">
        <div class="card-header">
        	
                <h4 class="card-title">
                    @if(isset($role))
                        Edit Roles
                    @else
                        ADD Roles
                    @endif
                </h4>
        </div>
        <div class="card-body">
             @if(isset($role))
                {!! Form::model(
                    $role, ['route' => ['roles.update', $role->id],'method'=>'PATCH']
                    ) !!}
             @else
                {!! Form::open(['url' => 'roles']) !!}
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
                @if(isset($role))
                    {!! Form::submit('UPDATE ROLE',['class' =>'btn btn-info btn-fill']); !!}
                @else
                    {!! Form::submit('ADD ROLE',['class' =>'btn btn-info btn-fill']); !!}
                @endif
                <!-- <button type="submit" class="btn btn-info btn-fill">ADD ROLE</button> -->
                <div class="clearfix"></div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection