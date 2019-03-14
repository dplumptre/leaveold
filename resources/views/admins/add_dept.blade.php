@extends('layouts.app')

@section('content')
<div class="container">
       <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        @include('layouts.errors')
        
        <div class="panel panel-info">
            <div class="panel-heading">
                 <div class="panel-title">ADD NEW DEPARTMENT</div>
            </div>


    <div class="panel-body" >
            <div style="color: green" align="center">
                @if (Session::has('status'))
                    {{ Session::get('status') }}
                 @endif
            </div>

            
<form method="post" action="/admins/new_dept">
        {{ csrf_field() }}
         
                  
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label class="control-label col-md-4"> Name of Department </label>
        <div class="controls col-md-8 ">  
            <input class="input-md  textinput textInput form-control" id="name" name="name" placeholder="Enter Name of Department" style="margin-bottom: 10px" type="text" />
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
             @endif
        </div>
    </div>


    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label class="control-label col-md-4"> Slug </label>
        <div class="controls col-md-8 ">  
            <input class="input-md  textinput textInput form-control" id="name" name="slug" placeholder="Enter Name of Department" style="margin-bottom: 10px" type="text" />
            @if ($errors->has('slug'))
                <span class="help-block">
                    <strong>{{ $errors->first('slug') }}</strong>
                </span>
             @endif
        </div>
    </div>

     <div class="form-group"> <div class="controls col-md-4 "></div>
        <div class="controls col-md-8 ">
            <input type="submit" name="create" value="Add New Department" class="btn btn-primary btn btn-info" />
        </div>
    </div> 

  </form>

    </div>

</div>

@endsection
