@extends('layouts.admin')

@section('content')
<div class="container">


      <div class="bg-primary p-2 text-white text-center rounded-top">
        <h2>Header Information</h2>
      </div>
      <div class="bg-white">

      <form action="{{ url('/header/edit/insert') }}" method="post">
        @csrf
        <table class="table">
          <tr>
            <th>Section 1</th>
            <td><textarea name="section1" class="form-control">{{ $information->section1 }}</textarea></td>
          </tr>
          <tr>
            <th>Section 2</th>
            <td><textarea name="section2" class="form-control">{{ $information->section2 }}</textarea></td>
          </tr>
          <tr>
            <th>Section 3</th>
            <td><textarea name="section3" class="form-control">{{ $information->section3 }}</textarea></td>
          </tr>
          <tr>
            <th>Section 4</th>
            <td><textarea name="section4" class="form-control">{{ $information->section4 }}</textarea></td>
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
