

@extends('layoutss.app')
@section('content')
<h1>Compensation</h1>
{!! Form::open(['url' => 'compensation/submit']) !!}
  <div class="form-group">
        {{Form::label('name', 'Name')}}
       <input type="text" class="form-control" name="" required=""placeholder="Enter You Name" >
       
    </div>
         <div class="form-group">
    {{Form::label('certificateno', 'Ownership Certificate Number')}}
        <input type="number" class="form-control" name="certificateno" required=""placeholder ="Enter  Your Ownership Certificate Number">
       
        <!-- {{Form::text('name', '',['class'=>'form-control', 'placeholder' =>'Enter  Your Name'])}} -->
    </div>


  <div class="form-group">
        {{Form::label('issuedate', 'Date of Issue')}}
       <input type="date" class="form-control" name="" required="">
       
    </div>
     <div class="form-group">
 {{Form::label('ctype', 'Compensation Type')}}
    {{Form::select('size', ['L' => 'Installment', 'S' => 'Full Payment'], null, ['placeholder' => 'Choose compensation type'])}}
</div>
 <div class="form-group">
    {{Form::label('ptype', 'Payement Type')}}
    {{Form::select('size', ['L' => 'Cash', 'S' => 'Cheque'], null, ['placeholder' => 'Choose payment type'],array('required' => 'required'))}}
</div>
 <div class="form-group">
    {{Form::label('mtype', 'Payement Amount')}}
    {{Form::select('size', ['L' => '5,00,000', 'S' => '10,00,000'], null, ['placeholder' => 'Choose payment amount'])}}
</div>
    <!--  <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '',['class'=>'form-control', 'placeholder' =>'Enter  Your Name'])}}
    </div>
    <div class="form-group">
        {{Form::label('address', 'Address')}}
        {{Form::text('address', '',['class'=>'form-control', 'placeholder' =>'Enter  Your Address'])}}
    </div>
  
    <div class="form-group">
        {{Form::label('email', 'E-Mail Address')}}
        {{Form::text('email','',['class'=>'form-control', 'placeholder' =>'Enter  Your Email'])}}
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
        {{Form::label('numberoffamilymember', 'Number of family Member')}}
       {{ Form::number('name', 'value')}}
    </div>
    <div class="form-group">
        {{Form::label('citizenship', 'Citizenship')}}
        {!! Form::label('Product Image') !!} {!! Form::file('image', null) !!}
       
    </div>
 -->
    <!-- <div class="form-group">
        {{Form::label('message', 'Message')}}
        {{Form::textarea('message', '',['class'=>'form-control', 'placeholder' =>'Enter Your Message'])}}
    </div> -->
    <div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    </div>

{!! Form::close() !!}
@endsection

@section('sidebar')
@parent
<p>Our Location is easy for finding.</p>
@endsection
  