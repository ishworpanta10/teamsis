
@extends('layoutss.app')
@section('content')
<h1>Victim's Property</h1>

<div class='wrap'>
	<table class="table table-hover table-bordered">
	 
		<tr>
		  <th>SN.</th>
		  <th>Name</th>
		  <th>Address</th>
		  <th>Date of Birth</th>
		  <th>Father's Name</th>
		  <th>Grandfather's Name</th>
		   <th>Destruction type</th>
		   <th>Certificate of ownership Number</th>
		   <th>Citizenship</th>

		 </tr>
		@foreach($olds as $key=>$old)
		 <tr>
			<td>{!!$key+1!!}</td>
			<td>{!!$old->name!!}</td>
			<td>{!!$old->address!!}</td>
			<td>{!!$old->dob!!}</td>
			<td>{!!$old->fname!!}</td>
			<td>{!!$old->gname!!}</td>
			<td>{!!$old->dtype!!}</td>
			<td>{!!$old->certificateno!!}</td>
			<td>{!!$old->citizenship!!}</td>
		@endforeach
		</tr>
	 </table>
	    </div>


@endsection









