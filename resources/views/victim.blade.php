

@extends('layoutss.app')
@section('content')
<h1>Contact</h1>

{!! Form::open(array('url'=>'victim','files'=>true))!!}
	 <div class="form-group">
    	{{Form::label('name', 'Name')}}
        <input type="text" class="form-control" name="name" required=""placeholder ="Enter  Your Name">
       
    	<!-- {{Form::text('name', '',['class'=>'form-control', 'placeholder' =>'Enter  Your Name'])}} -->
    </div>
    <div class="form-group">
        {{Form::label('address', 'Address')}}
        <input type="text" class="form-control" name="address" required=""placeholder ="Enter  Your Address">
       <!--  {{Form::text('address', '',['class'=>'form-control', 'placeholder' =>'Enter  Your Address'])}} -->
    </div>
    <div class="form-group">
        {{Form::label('dob', 'Date of Birth')}}
       
        {{ Form::date('dob', null,['class' => 'form-control']) }}
    </div>
  
     <div class="form-group">
        {{Form::label('fname', 'Father Name')}}
        {{Form::text('fname', '',['class'=>'form-control', 'placeholder' =>'Enter  Your Father Name'])}}
    </div>
    <div class="form-group">
        {{Form::label('gname', 'Grand Father Name')}}
        {{Form::text('gname', '',['class'=>'form-control', 'placeholder' =>'Enter  Your Grand Father Name'])}}
    </div>

     <div class="form-group">
    {{Form::label('dtype', 'Destruction Type')}}
  {{Form::text('dtype', '',['class'=>'form-control', 'placeholder' =>'Enter  Destruction Type'])}}
</div>

     <div class="form-group">
        {{Form::label('certificateno', 'Certificate Ownership Number')}}
        {{Form::text('certificateno', '',['class'=>'form-control', 'placeholder' =>'Enter  Your Certificate number'])}}
    </div>
    <div class="form-group">
        {{Form::label('citizenship', 'Citizenship')}}
        {!! Form::label('') !!} {!! Form::file('image', null) !!}
       
    </div>

    <!-- <div class="form-group">
    	{{Form::label('message', 'Message')}}
    	{{Form::textarea('message', '',['class'=>'form-control', 'placeholder' =>'Enter Your Message'])}}
    </div> -->
    <div>
    	{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    </div>

{!! Form::close() !!}
@endsection
