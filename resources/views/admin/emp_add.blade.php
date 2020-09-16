@extends('layouts.admin')

@section('content')
<div class="container">







    <div class="bg-success p-2 text-white text-center rounded-top">
		<h2>ADD Employment Imformation</h2>
    </div>
    	<div class="bg-white">

    		<form action="{{ url('/employment/add/post') }}" method="post" >
          @csrf
    			<table class="table table-bordered">
    			<tr>
    				<th>Year</th>
    				<td><input type="text" name="year" class="form-control"></td>
    			</tr>
    			<tr>
    				<th>Title</th>
    				<td><input type="text" name="title" class="form-control" ></td>
    			</tr>
    			<tr>
    				<th>Position</th>
    				<td><input type="text" name="position" class="form-control" ></td>
    			</tr>
    			<tr>
    				<th>Description</th>
    				<td><textarea name="description" class="form-control"></textarea></td>
    			</tr>

    		</table>
        @if (session('status'))
          <div class="alert alert-success col-md-6">
            {{ session('status') }}
          </div>
        @endif
    		<div class="text-center ">
    			<button type="submit" class="btn btn-success m-2 col-md-4">Add</button>
    		</div>
		</form>

	</div>






</div>

@endsection
