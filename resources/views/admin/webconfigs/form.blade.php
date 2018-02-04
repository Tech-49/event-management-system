 @extends('layouts.admin')
 @section('content')
  <div class="col-md-8">
    <div class="card">
        <div class="card-header">
        	
                <h4 class="card-title">
                    @if(isset($webConfig))
                        Edit Web Config
                    @else
                        ADD Web Config
                    @endif
                </h4>
        </div>
        <div class="card-body">
             @if(isset($webConfig))
                {!! Form::model(
                    $webConfig, ['route' => ['webconfigs.update', $webConfig->id],'method'=>'PATCH']
                    ) !!}
             @else
                {!! Form::open(['url' => 'webconfigs']) !!}
             @endif
                <div class="row">
                    <div class="col-md-8 pr-1">
                        <div class="form-group">
                            {!! Form::label('key', 'Key'); !!}
                            {!! Form::text('key', null,['class' =>'form-control']); !!}
                            <!-- <input type="text" class="form-control" placeholder="Company" value=""> -->
                        </div>
                        <div class="form-group">
                            {!! Form::label('value', 'Value'); !!}
                            {!! Form::textarea('value', null,['class' =>'form-control']); !!}
                            <!-- <input type="text" class="form-control" placeholder="Company" value=""> -->
                        </div>
                    </div>
                  
                </div>
                @if(isset($webConfig))
                    {!! Form::submit('UPDATE Config',['class' =>'btn btn-info btn-fill']); !!}
                @else
                    {!! Form::submit('ADD Config',['class' =>'btn btn-info btn-fill']); !!}
                @endif
                <!-- <button type="submit" class="btn btn-info btn-fill">ADD ROLE</button> -->
                <div class="clearfix"></div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection