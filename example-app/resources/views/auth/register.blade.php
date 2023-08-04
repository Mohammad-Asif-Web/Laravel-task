@include('includes.header')

<div class="container" style="height: 100vh;">
    <div class="row justify-content-center h-100 align-items-center">
        <div class="col-md-6">
            <div class="card px-3 py-4">
                <h3 class="mb-4 text-center">Register Page</h3>
                {{-- this is validation errors --}}
                @if($errors->any())
                    <ul class="col-md-12 mb-3">
                        @foreach ($errors->all() as $error)
                            <li class="alert alert-danger">{{$error}}</li>
                        @endforeach
                    </ul>
                @endif

                {{-- this is session error --}}
                @if (session()->has('error'))
                    <div class="alert alert-danger">{{session('error')}}</div>
                @endif

                @if (session()->has('success'))
                    <div class="alert alert-danger">{{session('success')}}</div>
                @endif

                <form class="row g-3" action="{{route('register.store')}}" method="post">
                    @csrf
                    <div class="col-md-12">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                    </div>
                    <div class="col-md-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Your Email">
                    </div>
                    <div class="col-md-12">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
                    </div>
                    <div class="col-12">
                        <label for="role" class="form-label">Select Role</label>
                       <select name="role" id="role" class="form-select">
                        <option>Choose...</option>
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                       </select>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary form-control">Register</button>
                    </div>
                </form>
                <p class="mt-2 text-center">Or <a href="{{route('login')}}" class="text-success fw-bold">Login</a> to Your Account</p>
            </div>
        </div>
    </div>
</div>

@include('includes.footer')





