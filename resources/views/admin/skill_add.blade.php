@extends('layouts.admin')

@section('content')
<div class="container">







    <div class="bg-success p-2 text-white text-center rounded-top">
		<h2>ADD Skill Imformation</h2>
    </div>
    	<div class="bg-white">

    		<form action="{{ url('/add/skill/post') }}" method="post" >
          @csrf
    			<table class="table table-bordered">
    			<tr>
    				<th>Name</th>
    				<td><input type="text" name="name" class="form-control"></td>
    			</tr>
    			<tr>
    				<th>Background Color</th>
    				<td><input type="text" name="bg_color" class="form-control" ></td>
    			</tr>
    			<tr>
    				<th>Width</th>
    				<td><input type="number" name="width" class="form-control" ></td>
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
