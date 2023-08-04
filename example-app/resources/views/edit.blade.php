@extends('master')
@section('content')

<h1 class="text-center mt-5">Update Task</h1>
<div class="container">
    <div class="row">
        <form class="row g-3" method="post" action="{{route('task.update', $task->id)}}" >
          @csrf
          @method('put')
            <div class="col-md-12">
              <label for="sl" class="form-label">ID</label>
              <input type="text" class="form-control" id="sl" value="{{$task->id}}" readonly>
            </div>
            <div class="col-md-12">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" id="name" value="{{$task->name}}" placeholder="your name">
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Address</label>
              <input type="text" class="form-control" name="address" id="inputAddress" value="{{$task->address}}" placeholder="your address">
            </div>
            <div class="col-md-12">
              <label for="inputState" class="form-label">City</label>
              <select id="inputState" class="form-select" name="state" value="{{$task->state}}">
                <option selected>{{$task->state}}</option>
                <option>Dhaka</option>
                <option>Sylhet</option>
                <option>Mumbai</option>
              </select>
            </div>
            <div class="col-12">
                <label for="profesion" class="form-label">Profession</label>
                <input type="text" class="form-control" name="profession" id="profesion" value="{{$task->profession}}" placeholder="your Profession">
            </div>
            <div class="col-md-12">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" value="{{$task->date}}" name="date">
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-success">Update Task</button>
            </div>
        </form>
    </div>
</div>

@endsection

