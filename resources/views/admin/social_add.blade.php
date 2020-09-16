@extends('layouts.admin')

@section('content')
<div class="container">







    <div class="bg-success p-2 text-white text-center rounded-top">
		<h2>ADD Social Link Imformation</h2> 
    </div>
    	<div class="bg-white">

    		<form action="{{ url('/social/add/post') }}" method="post" enctype="multipart/form-data">
          @csrf
    			<table class="table table-bordered">
    			<tr>
    				<th>Title</th>
    				<td><input type="text" name="title" class="form-control"></td>
				</tr>
				<tr>
    				<th>ICON Class</th>
    				<td><input type="text" name="icon" class="form-control"></td>
    			</tr>
    			<tr>
    				<th>Link</th>
    				<td><textarea name="link" class="form-control"></textarea></td>
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
