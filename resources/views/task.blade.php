@extends('layouts/layout')
@section('content')       	
@if ($message = Session::get('Success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<div class="task-list">       
		<div class="card">
			<div class="card-content">
				<div class="content">
				<h2>Task ID: {{$tasks->id}}</h2>
					<h3>{{ $tasks->title }} </h3>
				</div>
                <p class="card-text">{{ $tasks->description }}</p>
				<p class="card-text">Created at : {{ $tasks->created_at }}</p>
				@if ($tasks->completed)
				<a href="" type="button" class="btn btn-success">Completed</a>
				@else 
				<form method="POST" action="/completed">
					@csrf
					<input name="id" value="{{$tasks->id}}" type="hidden"> 
					<input name="completed" value="1" type="hidden"> 
					<button class="btn btn-info">Complete</button>
				</form>
				@endif
			</div>
			<div class="card-footer">
			</div>
		</div>
</div>
@endsection

