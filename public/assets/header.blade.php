@extends('layouts.admin')

@section('content')
<div class="container">

  <div class="bg-success p-2 text-white text-center rounded-top">
    <h2>Header Information</h2>
    </div>
  <div class="bg-white">
    <table class="table table-bordered">
      <tr>
        <th>Id</th>
        <th>Section 1</th>
        <th>Section 2</th>
        <th>Section 3</th>
        <th>Section 4</th>
        <th>Edit</th>
      </tr>
        @foreach ($informations as $information)
          <tr>
          <td>{{ $information->id }}</td>
          <td>{{ $information->section1 }}</td>
          <td>{{ $information->section2 }}</td>
          <td>{{ $information->section3 }}</td>
          <td>{{ $information->section4 }}</td>
          <td>
            <a href="{{url('header/edit')}}"><button class="btn btn-success ">Edit</button> </a>
          </td>
        </tr>
        @endforeach

    </table>
  </div>


</div>

@endsection
