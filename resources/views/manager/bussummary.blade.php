@extends('layout/manager')


@section('title')
bussummary
@endsection
@section('content')



<!-- <a href="{{route('manager.newbussummary')}}" class="btn btn-outline-info mb-2"><i class="fa fa-plus" aria-hidden="true"></i> New</a> -->
<h3>Bus Summary</h3>
<table class="table table-hover table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Route</th>
      <th scope="col">Operator</th>
      <th scope="col">Amount</th>
      <th scope="col">Booked Ticket</th>
    </tr>
  </thead>
  <tbody>
  @foreach($bussummary as $bussummary)
    <tr>
      <td>{{$bussummary->suid}}</td>
      <td>{{$bussummary->name}}</td>
      <td>{{$bussummary->route}}</td>
      <td>{{$bussummary->operator}}</td>
      <td>{{$bussummary->fare}}</td>
      <td>{{$bussummary->bookticket}}</td>

     
    </tr>
    @endforeach
      
  </tbody>
</table>

@endsection
