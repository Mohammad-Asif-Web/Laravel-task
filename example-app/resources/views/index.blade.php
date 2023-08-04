
@extends('master')
@section('content')

<h1 class="text-center mt-5">All Tasks List</h1>
<div class="container">
	<div class="row">
		<div class="card">

			@if(session()->has('msg'))
			<div class="alert alert-{{ session('cls') }} mt-2">
				{{ session('msg') }}
			</div>
			@endif

			<table class="table table-striped">
				<thead>
					<tr>
					<th scope="col">SL</th>
					<th scope="col">Task Name</th>
					<th scope="col">Address</th>
					<th scope="col">City</th>
					<th scope="col">Profession</th>
					<th scope="col">UserName</th>
					<th scope="col">Date</th>
					<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					@php 
						$sl=1;
					@endphp
					@foreach($tasks as $task)
					<tr>
						<td>{{$sl++}}</td>
						<td>{{$task->name}}</td>
						<td>{{$task->address}}</td>
						<td>{{$task->state}}</td>
						<td>{{$task->profession}}</td>
						<td>{{$task->user?->name}}</td>
						<td>{{$task->date}}</td>
						<td class="d-flex gap-1">
							<a href="{{route('task.show', $task->id)}}">
								<button class="btn btn-primary btn-sm">
									<i class="fa fa-eye"></i>
								</button>
							</a>
							<a href="{{route('task.edit', $task->id)}}">
								<button class="btn btn-warning btn-sm">
									<i class="fa fa-edit"></i>
								</button>
							</a>

							<form method="post" action="{{route('task.destroy', $task->id)}}">
								@csrf
								@method('delete')
								<button class="btn btn-danger btn-sm">
									<i class="fa fa-trash"></i>
								</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{{-- pagination --}}
			{{-- {{$tasks->links()}} --}}
		</div>
	</div>
</div>

@endsection
