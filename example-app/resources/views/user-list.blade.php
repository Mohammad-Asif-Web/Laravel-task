@extends('master')
@section('content')

<h1 class="text-center mt-5">All Users List</h1>

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
					<th scope="col">Name</th>
					<th scope="col">Role</th>
					<th scope="col">Email</th>
					<th scope="col">Created At</th>
					</tr>
				</thead>
				<tbody>
					@php 
						$sl=1;
					@endphp
					@foreach($users as $user)
					<tr>
						<td>{{$sl++}}</td>
						<td>{{$user->name}}</td>
						<td>@if($user->role == 1)
                               Admin
                            @else
                               User
                            @endif</td>
						<td>{{$user->email}}</td>
						<td>{{$user->created_at}}</td>
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
