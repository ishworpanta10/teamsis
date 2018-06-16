
@extends('layoutss.app')
@section('content')
<h1>Victim's Details</h1>

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
		@foreach($victims as $key=>$victim)
		 <tr>
			<td>{!!$key+1!!}</td>
			<td>{!!$victim->name!!}</td>
			<td>{!!$victim->address!!}</td>
			<td>{!!$victim->dob!!}</td>
			<td>{!!$victim->fname!!}</td>
			<td>{!!$victim->gname!!}</td>
			<td>{!!$victim->dtype!!}</td>
			<td>{!!$victim->certificateno!!}</td>
			<td>{!!$victim->citizenship!!}</td>
		@endforeach
		</tr>
	 </table>
	    </div>


@endsection
