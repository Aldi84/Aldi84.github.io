@extends('layout/main')

@section('container')

    <div class="post-satuan p-0">
    <div class="container p-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-white">
                <h2>
                    {{ $post->title }}
                </h2>
                <p>by <a href="/posts?author={{ $post->user->username }}" class="text-decoration-none">{{  $post->user->name }}</a> 
                    in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none"> 
                        {{ $post->category->name }} </a>
                </p>
                @if ($post->image)
                <div style="max-height: 350px; overflow:hidden">
                    <img src="{{ asset('storage/'.$post->image) }}" 
                    alt="{{ $post->category->name }}" class="img-fluid">
                </div>

                @else
                    <img src="https://source.unsplash.com/680x300/?{{ $post->category->name }}" 
                    alt="{{ $post->category->name }}" class="img-fluid">
                @endif
                
                <article class="my-3">
                    {!! $post->body !!} 
                </article>   
                <a href="/posts" class="d-block mt-3">Back To Post</a>
            </div>
        </div>
    </div>
    </div>
</div>

@endsection