@extends('layouts.admin')

@section('content')
<div class="container">

  <div class="bg-success p-2 text-white text-center rounded-top">
    <h2>Protfolio Information</h2>
    </div>
  <div class="bg-white">
    <table class="table table-bordered">
      <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Icon</th>
        <th>Icon Class</th>
        <th>Link</th>
        <th>Action</th>
      </tr>
        @foreach ($alls as $all)
          <tr>
          <td>{{ $all->id }}</td>
          <td>{{ $all->title }}</td>
          <td><i class="{{ $all->icon }}" style="font-size:25px; color:blue;"></i></td>
          <td>{{ $all->icon }}</td>
          <td>{{ $all->link }}</td>
         <td >
            <a href="{{url('social/edit')}}/{{ $all->id }}"><button class="btn btn-warning ">Edit</button> </a>
            <a href="{{url('social/delete')}}/{{ $all->id }}"><button class="btn btn-danger ">Delete</button> </a>
          </td>
        </tr>
        @endforeach

    </table>
  </div>
  @if (session('status'))
          <div class="alert alert-success col-md-6">
            {{ session('status') }}
          </div>
        @endif
  <div class="m-auto text-center">
    <a href="{{ url('add/social') }}" class="btn btn-success col-lg-4 ">Add Social Link</a>
  </div>


</div>

@endsection
