@extends('layouts.admin')

@section('content')
<div class="container">







    <div class="bg-success p-2 text-white text-center rounded-top">
		<h2>Edit skill Imformation</h2>
    </div>
    	<div class="bg-white">

    		<form action="{{ url('/skill/edit/post') }}" method="post" >
          @csrf
    			<table class="table table-bordered">
    			<tr>
    				<th>Skill name</th>
    				<td>
              <input type="hidden" name="skill_id" class="form-control" value="{{ $skill->id }}">
              <input type="text" name="name" class="form-control" value="{{$skill->name}}">
            </td>
    			</tr>
    			<tr>
    				<th>Background Color</th>
    				<td><input type="text" name="bg_color" class="form-control" value="{{ $skill->bg_color }}" ></td>
    			</tr>
    			<tr>
    				<th>Width</th>
    				<td><input type="number" name="width" class="form-control" value="{{ $skill->width }}" ></td>
    			</tr>


    		</table>
        @if (session('status'))
          <div class="alert alert-success col-md-6 m-auto">
            {{ session('status') }}
          </div>
        @endif
    		<div class="text-center ">
    			<button type="submit" class="btn btn-success m-2 col-md-4">Edit</button>
    		</div>
		</form>

	</div>






</div>

@endsection
