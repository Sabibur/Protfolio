@extends('layouts.admin')

@section('content')
<div class="container">







    <div class="bg-success p-2 text-white text-center rounded-top">
		<h2>Edit Employment Imformation</h2>
    </div>
    	<div class="bg-white">

    		<form action="{{ url('/employment/edit/post') }}" method="post" >
          @csrf
    			<table class="table table-bordered">
    			<tr>
    				<th>Year</th>
    				<td><input type="hidden" name="emp_id" class="form-control" value="{{$empinfo->id}}">
              <input type="text" name="year" class="form-control" value="{{$empinfo->year}}"></td>
    			</tr>
    			<tr>
    				<th>Title</th>
    				<td><input type="text" name="title" class="form-control" value="{{$empinfo->title}}" ></td>
    			</tr>
    			<tr>
    				<th>Position</th>
    				<td><input type="text" name="position" class="form-control" value="{{$empinfo->position}}" ></td>
    			</tr>
    			<tr>
    				<th>Description</th>
    				<td><textarea name="description" class="form-control">{{$empinfo->description}}</textarea></td>
    			</tr>

    		</table>
        @if (session('status'))
          <div class="alert alert-success col-md-6 m-auto">
            {{ session('status') }}
          </div>
        @endif
    		<div class="text-center ">
    			<button type="submit" class="btn btn-success m-2 col-md-4">Update</button>
    		</div>
		</form>

	</div>






</div>

@endsection
