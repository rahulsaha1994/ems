@extends('layouts.app')
@section('content')
  <div class="container">
	<form class="form col-md-6 col-sm-12" method="post" action="{{URL('post/task')}}">
		<h2 class="jumbotron">Enter A Task</h2>
		<div class="form-group">
			<label for="title"> Task:</label>
			<input type="text" class="form-control" name="title">
		</div>
		<div class="form-group">
			<label for="title"> description:</label>
			<textarea class="form-control" name="description"></textarea>
		</div>
		<div class="form-group">
			<label for="start time"> start time:</label>
			<input type="text" class="form-control selector" name="start time">
		</div>
		<div class="form-group">
			<label for="end time"> end time:</label>
			<input type="text" class="form-control selector" name="end time">
		</div>
		<div class="checkbox">
			<label for ="full_event"><input type="checkbox">Full day? </label>
		</div>
		<button type="submit" class="btn btn-success btn-default">Submit</button>
	</form>
</div>
</form>

  @endsection