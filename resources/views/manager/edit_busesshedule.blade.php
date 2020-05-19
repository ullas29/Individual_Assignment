@extends('layout/manager')

@section('title')
Edit busesshedule
@endsection
@section('content')


<form method="post">
@csrf
  <div class="form-group row">
    <label for="cid" class="col-sm-2 col-form-label">ID</label>
    <div class="col-4">
    <input type="text" class="form-control form-control-sm" name="bsid" value="{{$busesshedule->bsid}}" readonly>
    </div>
  </div>

  <div class="form-group row">
    <label for="cname" class="col-sm-2 col-form-label">Name</label>
    <div class="col-4">
    <input type="text" class="form-control form-control-sm" name="name" value="{{$busesshedule->name}}">
    </div>
  </div>

   <div class="form-group row">
    <label for="operator" class="col-sm-2 col-form-label">Operator</label>
    <div class="col-4">
    <input type="text" class="form-control form-control-sm" name="operator" value="{{$busesshedule->operator}}">
    </div>
  </div>

   <div class="form-group row">
    <label for="seat_row" class="col-sm-2 col-form-label">S.Row</label>
    <div class="col-4">
    <input type="text" class="form-control form-control-sm" name="seat_row" value="{{$busesshedule->seat_row}}">
    </div>
  </div>

   <div class="form-group row">
    <label for="seat_column" class="col-sm-2 col-form-label">S.Column</label>
    <div class="col-4">
    <input type="text" class="form-control form-control-sm" name="seat_column" value="{{$busesshedule->seat_column}}">
    </div>
  </div>

   <div class="form-group row">
    <label for="route" class="col-sm-2 col-form-label">Route</label>
    <div class="col-4">
    <input type="text" class="form-control form-control-sm" name="route" value="{{$busesshedule->route}}">
    </div>
  </div>

   <div class="form-group row">
    <label for="fare" class="col-sm-2 col-form-label">Fare</label>
    <div class="col-4">
    <input type="text" class="form-control form-control-sm" name="fare" value="{{$busesshedule->fare}}">
    </div>
  </div>

   <div class="form-group row">
    <label for="departure" class="col-sm-2 col-form-label">Departure</label>
    <div class="col-4">
    <input type="text" class="form-control form-control-sm" name="departure" value="{{$busesshedule->departure}}">
    </div>
  </div>

   <div class="form-group row">
    <label for="arrival" class="col-sm-2 col-form-label">Arrival</label>
    <div class="col-4">
    <input type="text" class="form-control form-control-sm" name="arrival" value="{{$busesshedule->arrival}}">
    </div>
  </div>

  <button type="submit" class="btn btn-primary"> Update</button>

</form>
@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
@endsection
  