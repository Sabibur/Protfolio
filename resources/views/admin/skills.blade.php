@extends('layouts.admin')

@section('content')
<div class="container">

  <div class="bg-success p-2 text-white text-center rounded-top">
    <h2>Skills Information</h2>
    </div>
  <div class="bg-white">
    <table class="table table-bordered">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Background Color</th>
        <th>Width</th>
        <th>Delete</th>
      </tr>
        @foreach ($skills as $skill)
          <tr>
          <td>{{ $skill->id }}</td>
          <td>{{ $skill->name }}</td>
          <td>{{ $skill->bg_color }}</td>
          <td>{{ $skill->width }}</td>
          <td>
            <a href="{{url('skill/edit')}}/{{ $skill->id }}"><button class="btn btn-warning ">Edit</button> </a>
            <a href="{{url('skill/delete')}}/{{ $skill->id }}"><button class="btn btn-danger ">Delete</button> </a>
          </td>
        </tr>
        @endforeach

    </table>
  </div>
  <div class="m-auto text-center">
    <a href="{{ url('add/skill') }}" class="btn btn-success col-lg-4 ">Add Skill</a>
  </div>


</div>

@endsection
