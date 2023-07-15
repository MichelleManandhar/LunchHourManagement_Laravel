@extends('layouts.master')

@section('title')
    Menu History| Lunch Hour Management
@endsection
@section('content')


  <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Menu History</h4>

                 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif              
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <th>Id</th>
                    <th>Dish</th>
                    <th>Category</th>
                    <th>Image</th>
                    </thead>
                    <tbody>
                        @foreach ($menus as $row)
                      <tr>
                      <td>{{$row->id}}</td>
                      <td>{{$row->dish}}</td>
                      <td>{{$row->category}}</td>

                      <td><img src="{{asset('uploads/menu/' . $row->image)}}" width="100px;" height="100px;" alt="Image"></td>

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