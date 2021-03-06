
@extends('base')


@section('content')
<style>
    p{
        text-align: center;
    }
    body{
    background: url(background.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  }

</style>
<br><br><br>
    <div class="container">
        <div class="row mb-2">
            <div class="col-md-4 offset-4">
                <div class="card">
                    <div class="card text-black bg-light mb-3">
                        <h3>Create New Movie</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{url('/dashboard/create')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="description">Description</label>
                                <input type="text" name="description" id="description" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="price">Price</label>
                                <input type="text" name="price" id="price" class="form-control">
                            </div>
                            
                            <div class="mb-3">
                                <label for="quantity">Quantity</label>
                                <input type="text" name="quantity" id="quantity" class="form-control">
                            </div>

                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit">Add Movie</button>
                                &nbsp;&nbsp;
                                <a href="{{ url('/dashboard') }}" class="btn btn-primary text-white">Back</a>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop