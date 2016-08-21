@extends('layouts.master')

@section('content')
	@if (!isset($employee))
		{!! Form::open( ['action' => 'EmployeeController@store', 'class' => 'form-horizontal']) !!}
	@else
		{{ Form::model($employee, ['route' => ['updateEmployee', $employee->id], 'method' => 'patch', 'class' => 'form-horizontal']) }}
	@endif
			<fieldset>
				<div class="form-group">
				  <label for="inputName" class="col-lg-2 control-label">Name</label>
				  <div class="col-lg-10">
				    {{ Form::text('name') }}
				    @if (isset($errors) && $errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
				  </div>
				</div>
				<div class="form-group">
				  <label for="inputCategory" class="col-lg-2 control-label">Email</label>
				  <div class="col-lg-10">
				    {{ Form::text('email') }}
				    @if (isset($errors) && $errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
				  </div>
				</div>
				<div class="form-group">
				  <label for="inputLatitude" class="col-lg-2 control-label">Department</label>
				  <div class="col-lg-10">
				    {{ Form::text('department') }}
				    @if (isset($errors) && $errors->has('department'))
                        <span class="help-block">
                            <strong>{{ $errors->first('department') }}</strong>
                        </span>
                    @endif
				  </div>
				</div>
				
				<div class="form-group">
				  <div class="col-lg-10 col-lg-offset-2">
				    <button type="reset" class="btn btn-default">Cancel</button>
				    <button type="submit" class="btn btn-primary">Submit</button>
				  </div>
				</div>
			</fieldset>
	{!! Form::close() !!}
@stop