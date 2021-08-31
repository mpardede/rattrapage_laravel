@extends('layouts/layout')

@section('title', 'List of Tasks')

@section('main')
	<div class="task-list">
		@foreach($tasks as $task)
		<div class="card">
			<div class="card-content">
				<div class="content">
					<h3>{{ $task->title }}</h3>
				</div>
			</div>
			<div class="card-footer">
			@if (!$task->completed)
			<a href="/task/{{ $task->id }}" class="card-footer-item">Show task ></a>
			@else
			<a href="/task/{{ $task->id }}" class="card-footer-item">Completed ></a>
			@endif
			</div>
		</div>
		@endforeach
	</div>
@endsection