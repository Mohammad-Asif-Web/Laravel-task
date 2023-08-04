@extends('master')
@section('content')

<h1 class="text-center mt-5">Create A New Task</h1>
<div class="container">
    <div class="row">
        <form class="row g-3" action="{{route('task.store')}}" method="post">
          @csrf
            <div class="col-md-12">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="your name">
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Address</label>
              <input type="text" class="form-control" name="address" id="inputAddress" placeholder="your address">
            </div>
            <div class="col-md-12">
              <label for="State" class="form-label">City</label>
              <select id="State" class="form-select" name="state">
                <option selected>Choose...</option>
                <option>Dhaka</option>
                <option>Sylhet</option>
                <option>Mumbai</option>
              </select>
            </div>
            <div class="col-12">
                <label for="profesion" class="form-label">Profession</label>
                <input type="text" class="form-control" name="profession" id="profesion" placeholder="your Profession">
            </div>
            <div class="col-12">
                <label for="user_id" class="form-label">Select Role</label>
               <select name="user_id" id="user_id" class="form-select">
                <option selected>Choose...</option>
                @foreach ($users as $user)
                  <option value={{$user->id}}>{{$user->name}}</option>
                @endforeach
               </select>
            </div>
            <div class="col-md-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-success">Add Task</button>
            </div>
        </form>
        {{-- Error message --}}
        @if($errors->any())
        <ul class="alert alert-danger mt-3">
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
        @endif

    </div>
</div>

@endsection






