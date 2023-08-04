<nav class="navbar navbar-expand-lg navbar-light bg-light pt-0 pb-0">
	<div class="container-fluid bg-primary">
		@auth
	  	<h1 class="text-white py-3">{{auth()->user()->name}}</h1>
		<ul class="nav mb-2 mb-lg-0">
		  <li class="nav-item">
			<a class="nav-link active text-warning" href="{{route('user.index')}}">Users List</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link text-warning" href="{{route('task.index')}}">Task List</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link text-warning" href="{{route('task.create')}}">Create New Task</a>
		  </li>
		</ul>
		<a class="nav-link text-white" href="{{route('logout')}}">Logout</a>
		@else
		<h1 class="text-warning py-3">Guest Mode</h1>
		<ul class="nav ms-auto mb-2 mb-lg-0">
			<li class="nav-item">
			  <a class="nav-link text-warning" href="{{route('login')}}">Login</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link text-warning" href="{{route('register')}}">Registration</a>
			</li>
		  </ul>
		@endauth
	</div>
  </nav>




