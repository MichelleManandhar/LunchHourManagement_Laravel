@extends('layouts.chefapp')
@section('content')  

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body> --}}
<h2> Today's Menu</h2>
<br>
<div class="container">
@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    <div class="jumbotron">
    
    <form action="/addmenu" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}

        <div class="form-group">
        <label>Dish Name:</label>
        <input type="text" name="dish" class="form-control" placeholder="Enter Dish Name..">
        </div>

        <div class="form-group">
        <label>Category:</label>
            <input type="radio" class="form-control" name="category" value="Veg"> Veg<br>
            <input type="radio" class="form-control" name="category" value="Non-veg"> Non-veg<br>
            <input type="radio" class="form-control" name="category" value="Snacks"> Snacks<br> 
            <input type="radio" class="form-control" name="category" value="Vegan"> Vegan<br>
            <input type="radio" class="form-control" name="category" value="Desert"> Desert<br>
        </div>

        <div class="input-group">
            <div class="custom-file">
                <input type="file" name="image" class ="custom-file-input">
                <label class="custom-file-label">Choose File</label>
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary"> Add Dish </button>
    </form>
    </div>
</div>
{{-- </body>
</html> --}}
@endsection