@extends('layouts.admin')

@section('content')
<div class="container">








<div class="bg-success p-2 text-white text-center rounded-top">
		<h2>Employment Information</h2>
	</div>
	<div class="bg-white">
		<table class="table table-bordered">
			<tr>
				<th>Id</th>
				<th>Year</th>
				<th>Title</th>
				<th>Position</th>
				<th>Description</th>
				<th>Action</th>
			</tr>
      @forelse ($infos as $info)

			<tr>
				<td>{{ $info->id }}</td>
				<td>{{ $info->year }}</td>
				<td>{{ $info->title }}</td>
				<td>{{ $info->position }}</td>
				<td>{{ $info->description }}</td>
				<td>
          <a href="{{ url('/employment/edit') }}/{{ $info->id }}"><button class="btn btn-success ">Edit</button> </a>
          <a href="{{ url('/employment/delete') }}/{{ $info->id }}"><button class="btn btn-danger ">Delete</button> </a>
        @empty
          <div class="text-center m-auto">
            <p>No Data Avialable!</p>
          </div>
        @endforelse
				</td>
			</tr>
		</table>
    <div class="text-center p-2 ">
      <a href="{{ url('/employment/add') }}"><button class="btn btn-success col-sm-4">ADD More</button> </a>
    </div>
	</div>



</div>

@endsection
