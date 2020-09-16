@extends('layouts.admin')

@section('content')
<div class="container">


      <div class="bg-primary p-2 text-white text-center rounded-top">
        <h2>protfolio Information</h2>
      </div>
      <div class="bg-white">

      <form action="{{ url('/protfolio/edit/post') }}" method="post" enctype="multipart/form-data">
        @csrf
        <table class="table">
          <tr>
				<th>Title</th>
    				<td>
              <input type="hidden" name="id" class="form-control" value="{{ $protfolio->id }}">
              <input type="text" name="title" class="form-control" value="{{ $protfolio->title }}">
            </td>
    			</tr>
          <tr>
            <th>Description</th>
            <td><textarea name="description" class="form-control">{{ $protfolio->description }}</textarea></td>
          </tr>
    			<tr>
    				<th>Subject</th>
    				<td><input type="text" name="subject" class="form-control" value="{{ $protfolio->subject }}"></td>
    			</tr>
    			<tr>
    				<th>link</th>
    				<td><input type="text" name="link" class="form-control" value="{{ $protfolio->link }}"></td>
    			</tr>
    			<tr>
    				<th>Photo</th>
    				<td><img src="{{ asset('protfolio/')}}/{{ $protfolio->image }}" alt="" width="200"></td>
    			</tr>
    			<tr>
    				<th>Change Photo</th>
    				<td><input type="file" name="image" class="form-control"></td>
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
