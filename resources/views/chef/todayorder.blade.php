@extends('layouts.chefapp')
@section('content')  

  <div class="row">
  @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
          <div class="col-md-12">
            <div class="card">
                <h4 class="card-title"> Today's Order</h4>
                
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <th>Id</th>
                    <th>Menu Id</th>
                    <th>Description</th>
                    <th>quantity</th>
                    </thead>
                    <tbody>
                        @foreach ($orders as $row)
                      <tr>
                      <td>{{$row->id}}</td>
                      <td>{{$row->menu_id}}</td>
                      <td>{{$row->description}}</td>
                      <td>{{$row->quantity}}</td>
                    <td>
                        <form action="/order-complete/{{$row->id}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                          <button type="submit" class="btn btn-success">Complete</button>
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