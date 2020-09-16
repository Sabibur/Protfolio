@extends('layouts.admin')

@section('content')
<div class="container">



<div class="bg-success p-2 text-white text-center rounded-top">
		<h2>About Information</h2>
	</div>
	<div class="bg-white">
		<table class="table table-bordered">
			<tr>
				<th>Id</th>
				<th>Photo 1</th>
				<th>Name</th>
				<th>Title</th>
				<th>Message</th>
				<th>Edit</th>
			</tr>
        @foreach ($infos as $info)
			<tr>
				<td>{{ $info->id }}</td>
				<td><img src="{{ asset('assets/images/avatar.jpg')}}" alt="" width="100"></td>
				<td>{{ $info->name }}</td>
				<td>{{ $info->title }}</td>
				<td>{{ $info->msg }}</td>
				<td>
					<a href="{{ url('about/edit') }}"><button class="btn btn-success ">Edit</button> </a>
				</td>
			</tr>
      @endforeach
		</table>
	</div>




</div>

@endsection
