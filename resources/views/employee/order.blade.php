@extends('layouts.app')
@section('content')  

  <div class="row">
  @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
          <div class="col-md-12">
            <div class="card">
                <h4 class="card-title"> Today's Special</h4>
                
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <th>Id</th>
                    <th>Dish</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Order</th>
                    </thead>
                    <tbody>
                        @foreach ($menus as $row)
                      <tr>
                      <td>{{$row->id}}</td>
                      <td>{{$row->dish}}</td>
                      <td>{{$row->category}}</td>

                      <td><img src="{{asset('uploads/menu/' . $row->image)}}" width="100px;" height="100px;" alt="Image"></td>

                      <td>
                        <form action="/food-order/{{$row->id}}" method="POST">
                        {{csrf_field()}}
                          <button type="submit" class="btn btn-success">Order</button>
                        </form>

                        </td>
                        
                    </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

@endsection
@section('scripts')
@endsection