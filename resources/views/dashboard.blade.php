@extends('base')

@section('content')

<style></style>

  <div class="container">
  <h1 class="title text-danger" >Welcome To IWatch  </h1>
  </div>

  <style>

    .center {
      padding: 70px 0;
      border: 3px solid green;
      text-align: center;
      margin-top: 15%;
    }
    </style>
    <br>
    <br>
    <div class="container">
    <div class="mb-1 float-end">
      <a href="{{url('dashboard/create')}}" class="btn btn-secondary">
        Add Movie
      </a>
    </div>
  <h1 class="text-white">List of Movies</h1>
  <table class="table table-sm table-ligt">
      <thead class="bg-secondary text-white">
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>&nbsp;</th>
      </thead>
      <tbody class="text-white">
          @foreach($items as $list)
          <tr>
              <td>{{$list->name}}</td>
              <td>{{$list->description}}</td>
              <td>{{$list->price}}</td>
              <td>{{$list->quantity}}</td>
              <td>
                  <a href="{{ url('dashboard/edit/' . $list->id) }}" style="margin-right: 5px;" class="btn btn-secondary btn-sm d-inline">
                      Edit
                  </a> &nbsp;&nbsp;
                  <a href="{{ url('dashboard/delete/' . $list->id) }}" class="btn btn-danger btn-sm" type="submit">
                      Delete
                  </a>
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>
  </div> 
@endsection

