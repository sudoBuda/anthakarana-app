@extends ('layouts.app')
@section('content')
<form class="justify-content-center col-md-3 m-5" action="{{ route('eventupdate', ['id'=>$event->id]) }}" method="post">
	@method('PATCH')
	@csrf
	<div class="form-group">
		<label for="exampleFormControlInput1">Name</label>
		<input type="text" name="title" class="form-control" id="exampleFormControlInput1" value="{{ $event -> title }}">
	</div>
	<div class="form-group">
		<label for="exampleFormControlInput1">Description</label>
		<input type="text" name="description" class="form-control" id="exampleFormControlInput1" value="{{ $event -> description }}">
	</div>
	<div class="form-group">
		<label for="exampleFormControlInput1">People</label>
		<input type="text" name="total_people" class="form-control" id="exampleFormControlInput1" value="{{ $event -> total_people }}">
	</div>
	<div class="form-group">
		<label for="exampleFormControlInput1">Image</label>
		<input type="text" name="image" class="form-control" id="exampleFormControlInput1" value="{{ $event -> image }}">
	</div>
	<div class="form-group">
		<label for="exampleFormControlInput1">Date</label>
		<input type="date" name="date" class="form-control" id="exampleFormControlInput1" value="{{ $event -> date }}">
	</div>
	<div class="form-group">
		<label for="exampleFormControlInput1">Start Hour</label>
		<input type="time" name="start_hour" class="form-control" id="exampleFormControlInput1" value="{{ $event -> start_hour }}">
	</div>
	<div class="float-right">
		<a class="btn btn-primary" href="{{ route('home') }}">Home</a>
	</div>
	<div class="btnCreate">
		<button type="submit" class="btn btn-outline-success" value="Create" onclick="return confirm('¿Estás seguro de querer modificar este evento? {{$event->name}} -ID {{ $event -> id }}')">Editar</button>
	</div>
</form>
@endsection