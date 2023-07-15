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
                <h4 class="card-title"> My Order</h4>
                
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <th>Id</th>
                    <th>Menu Id</th>
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