@extends('layouts.app')

@section('content')
    <div class="h-20 d-flex justify-content-center">
    <div class=" col-4 d-flex bg-white p-6 mt-3 rounded justify-content-center ">
       <h1 class="color-dark">register</h1>
    </div>
   </div>
   <div class="d-flex justify-content-center mt-5 ">
        <form action="{{ route('register') }}" method="post" class="col-4 d-flex row justify-content-center">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Name</label>
                <input type="text" class="form-control  @error('name') border-danger @enderror " id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{old('name')}}">
                @error('name')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Username</label>
                <input type="text" class="form-control  @error('username') border-danger @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" value="{{old('username')}}">
                @error('username')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
              </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Email address</label>
                <input type="email" class="form-control @error('name') border-danger @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{old('email')}}">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                @error('email')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-white"">Password</label>
                <input type="password" class="form-control  @error('name') border-danger @enderror" id="exampleInputPassword1" name="password">
                @error('password')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-white"">Repeat assword</label>
                <input type="password" class="form-control @error('name') border-danger @enderror" id="exampleInputPassword1" name="password_confirmation">
                @error('password_confirmation')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary w-50 d-flex justify-content-center ">Submit</button>
        </form>
   </div>
@endsection