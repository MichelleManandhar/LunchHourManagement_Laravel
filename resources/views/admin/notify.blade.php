@extends('layouts.master')

@section('title')
    Menu History| Lunch Hour Management
@endsection
@section('content')


  <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Finished Order</h4>

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
                    <th>Menu_id</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    </thead>
                    <tbody>
                        @foreach ($orders as $row)
                      <tr>
                      <td>{{$row->id}}</td>
                      <td>{{$row->menu_id}}</td>
                      <td>{{$row->description}}</td>
                      <td>{{$row->quantity}}</td>

                      
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