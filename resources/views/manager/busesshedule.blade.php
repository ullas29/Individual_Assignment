@extends('layout/manager')


@section('title')
busesshedule
@endsection

@section('content')

<a href="{{route('manager.newbusesshedule')}}" class="btn btn-outline-info mb-2"><i class="fa fa-plus" aria-hidden="true"></i> New</a>
<table class="table table-hover table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Operator</th>
      <th scope="col">S.Row</th>
      <th scope="col">S.Column</th>
      <th scope="col">Route</th>
      <th scope="col">Fare</th>
      <th scope="col">Departure</th>
      <th scope="col">Arrival</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
  @foreach($busesshedule as $busesshedule)
		<tr>
			<td>{{$busesshedule->bsid}}</td>
			<td>{{$busesshedule->name}}</td>
			<td>{{$busesshedule->operator}}</td>
			<td>{{$busesshedule->seat_row}}</td>
			<td>{{$busesshedule->seat_column}}</td>
			<td>{{$busesshedule->route}}</td>
			<td>{{$busesshedule->fare}}</td>
			<td>{{$busesshedule->departure}}</td>
			<td>{{$busesshedule->arrival}}</td>
			<td>
				<a href="{{route('manager.editbusesshedule',$busesshedule->bsid)}}" class="btn btn-outline-dark"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a> | 
				<a href="{{route('manager.deletebusesshedule',$busesshedule->bsid)}}" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
			</td>
		</tr>
		@endforeach
  		
	</tbody>
</table>

@endsection
  