@extends('layouts.admin')

@section('content')
<div class="container">


      <div class="bg-primary p-2 text-white text-center rounded-top">
        <h2>Header Information</h2>
      </div>
      <div class="bg-white">

      <form action="{{ url('/about/edit/insert') }}" method="post" enctype="multipart/form-data">
        @csrf
        <table class="table">
          <tr>
				<th>NAME</th>
    				<td><input type="text" name="name" class="form-control" value="{{ $info->name }}"></td>
    			</tr>
    			<tr>
    				<th>Title</th>
    				<td><input type="text" name="title" class="form-control" value="{{ $info->title }}"></td>
    			</tr>
    			<tr>
    				<th>Message</th>
    				<td><textarea name="msg" class="form-control">{{ $info->msg }}</textarea></td>
    			</tr>
    			<tr>
    				<th>Photo</th>
    				<td><img src="{{ asset('assets/images/avatar.jpg') }}" alt="" width="200"></td>
    			</tr>
    			<tr>
    				<th>Change Photo</th>
    				<td><input type="file" name="img" class="form-control"></td>
    			</tr>
        </table>
        @if (session('status'))
          <div class="alert alert-success col-md-6 m-auto">
            {{ session('status') }}
          </div>
        @endif
        @if (session('wrong'))
          <div class="alert alert-danger col-md-6 m-auto">
            {{ session('wrong') }}
          </div>
        @endif
        <div class="text-center">
          <button type="submit" class="btn btn-primary m-2 ">Update</button>
        </div>
      </form>

      </div>


</div>

@endsection
