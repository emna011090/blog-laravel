@extends('layout')
@section('content')
<div class="post">
    <div class="row">
        @foreach ($posts as $post)
      <div class="card col-2 offset-1" style="width: 18rem;">
          <img src="{{asset('img/Tendances.jpg')}}" />

          <div class="card-body">
            <li>{{ $post->category->category }}</li>
            <h5 class="card-title text-white">{{$post->title}}</h5>
            <p class="card-text">{{$post->content}}</p>
            <p class="card-detail text-white">Rédigé par {{$post->auther->author}} </p>
            
            <a href="/detail/{{ $post->id }}"  class="btn text-white ">Lire la suite</a>
          </div>
        </div>
      @endforeach

        
    </div>
    
    
    </div>
    @endsection