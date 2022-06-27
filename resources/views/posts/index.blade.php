@extends('layouts.app')

@section('content')
   <div class="h-20 row d-flex justify-content-center">
    
    <div class="col-6 d-flex bg-white p-6 mt-3 rounded justify-content-center">
        
        <form  method="post">
            @csrf
            <div class="mb-6">
                <p class="mt-2">body</p>
                <textarea name="body" class="bg-white border-2 w-full p-4 rounded-lg" placeholder="post something"></textarea>
                
                @error('body')
                    <div class="text-danger mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button class="btn btn-outline-dark mb-2">submit</button>
        </form>
        
        
    </div>
    @foreach ($posts as $post)
        <div class="w-220px bg-white p-6 mt-3 rounded justify-content-center">
            <p class="text-center"> author: {{ auth()->user()->name}}</p>
            <p class="text-dark"> {{$post->body}} </p>
            <P class="text-dark">{{$post->created_at->diffForHumans()}}</P>    
        </div>
        @endforeach
    {{ $posts->links() }}
   </div>
   
@endsection