@extends('layouts.admin')

@section('content')
<div class="container">

  <div class="bg-success p-2 text-white text-center rounded-top">
    <h2>Message Information</h2>
    </div>
  <div class="bg-white">
    <table class="table table-bordered">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Description</th>
        <th>Message At</th>
        <th>Delete</th>
      </tr>
        @foreach ($messages as $message)
          <tr>
          <td>{{ $message->id }}</td>
          <td>{{ $message->name }}</td>
          <td>{{ $message->email }}</td>
          <td>{{ $message->subject }}</td>
          <td>{{ $message->message }}</td>
          <td>{{ $message->created_at }}</td>
          <td>
            <a href="{{url('message/delete')}}/{{ $message->id }}"><button class="btn btn-danger ">Delete</button> </a>
          </td>
        </tr>
        @endforeach

    </table>
  </div>
 

</div>

@endsection
