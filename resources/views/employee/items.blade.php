@extends('layouts.app')
@section('content')  

<h2> Order Description</h2>
<br>
<div class="container">
@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    <div class="jumbotron">

   

    <form action="/order-placed" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}

      
        <div class="form-group">
        <label>Description:</label>
           <input type="textbox" name="description" class="form-control" placeholder="Enter Description">
        </div>

        <div class="form-group">
        <label>Quantity:</label>
           <input type="text" name="quantity" class="form-control" placeholder="Enter quantity..">
        </div>

        </div>
        <button type="submit" name="submit" class="btn btn-success"> Order </button>
    </form>
    </div>
</div>


@endsection