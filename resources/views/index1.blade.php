@extends('main.main')
<!-- @extends('cdn.cdn') -->
@section('content')
<table>
  <form >
   <legend>
      
 <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="name" name="name"  class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name">
 
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
 
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
   </legend>
</form>
</table>
@endsection