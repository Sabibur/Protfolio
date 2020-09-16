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
        <th>Description</th>
        <th>Subject</th>
        <th>Link</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
        @foreach ($alls as $all)
          <tr>
          <td>{{ $all->id }}</td>
          <td>{{ $all->title }}</td>
          <td>{{ $all->description }}</td>
          <td>{{ $all->subject }}</td>
          <td>{{ $all->link }}</td>
          <td>{{ $all->image }}</td>
          <td>
            <a href="{{url('protfolio/edit')}}/{{ $all->id }}"><button class="btn btn-warning ">Edit</button> </a>
            <a href="{{url('protfolio/delete')}}/{{ $all->id }}"><button class="btn btn-danger ">Delete</button> </a>
          </td>
        </tr>
        @endforeach

    </table>
  </div>

  <div class="m-auto text-center">
    <a href="{{ url('add/protfolio') }}" class="btn btn-success col-lg-4 ">Add Protfolio</a>
  </div>


</div>

@endsection
