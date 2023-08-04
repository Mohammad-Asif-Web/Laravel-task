
@extends('master')
@section('content')

<div class="container mt-5">
	<div class="d-flex justify-content-between">
		<h2 class="">Show Single Task</h2>
		<a class="nav-link btn btn-sm btn-dark text-white" href="{{route('task.edit', $task->id)}}">Edit Task</a>
	</div>
</div>

<div class="container mt-5">
    <div class="card">
        <div class="row p-4">
            <div class="col-md-4">
                <p>Sl</p>
                <p>Name</p>
                <p>Address</p>
                <p>City</p>
                <p>Profession</p>
                <p>Date</p>
            </div>
            <div class="col-md-8">
                <p>{{$task->id}}</p>
                <p>{{$task->name}}</p>
                <p>{{$task->address}}</p>
                <p>{{$task->state}}</p>
                <p>{{$task->profession}}</p>
                <p>{{$task->date}}</p>
            </div>
        </div>
    </div>
</div>

@endsection
