@extends('layouts.admin')

@section('content')
<div class="container">


      <div class="bg-primary p-2 text-white text-center rounded-top">
        <h2>protfolio Information</h2>
      </div>
      <div class="bg-white">

      <form action="{{ url('/social/edit/post') }}" method="post" enctype="multipart/form-data">
        @csrf
        <table class="table">
          <tr>
				<th>Title</th>
    				<td>
              <input type="hidden" name="id" class="form-control" value="{{ $social->id }}">
              <input type="text" name="title" class="form-control" value="{{ $social->title }}">
            </td>
    			</tr>
          <tr>
            <th>Icon Class</th>
            <td>  
               <input type="text" name="icon" class="form-control" value="{{ $social->icon }}">
           </td>
          </tr>
    		
    			<tr>
    				<th>link</th>
    				<td><input type="text" name="link" class="form-control" value="{{ $social->link }}"></td>
    			</tr>
    	
        </table>
        @if (session('status'))
          <div class="alert alert-success col-md-6 m-auto">
            {{ session('status') }}
          </div>
        @endif
       
        <div class="text-center">
          <button type="submit" class="btn btn-primary m-2 ">Update</button>
        </div>
      </form>

      </div>


</div>

@endsection
