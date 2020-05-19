<!-- @extends('layout/admin')


@section('title')
Product Category
@endsection

@section('content')

<a href="{{route('admin.newcategory')}}" class="btn btn-outline-info mb-2"><i class="fa fa-plus" aria-hidden="true"></i> New</a>
<table class="table table-hover table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
  @foreach($busesshedule as $busesshedule)
		<tr>
			<td>{{$busesshedule->bsid}}</td>
			<td>{{$busesshedule->name}}</td>
			<td>
				<a href="{{route('admin.editcategory',$busesshedule->cid)}}" class="btn btn-outline-dark"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a> | 
				<a href="{{route('admin.deletecategory',$busesshedule->cid)}}" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
			</td>
		</tr>
		@endforeach
  		
	</tbody>
</table>

@endsection
   -->