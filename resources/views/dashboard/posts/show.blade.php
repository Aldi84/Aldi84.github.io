@extends('dashboard.layout.main')
@section('container')
<div class="container p-5">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2>
                {{ $post->title }}
            </h2>
            {{-- kembali --}}
            <a href="/dashboard/posts" class="btn btn-info">Back to mypost</a>
            {{-- edit --}}
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">Edit</a>
            {{-- delete --}}
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0" onclick="return confirm('are you sure delete this?')">Delete</button>
                {{-- <a href="#" class="badge bg-danger">Delete</span></a> --}}
                </form>            

                @if ($post->image)
                <div style="max-height: 350px; overflow:hidden">
                    <img src="{{ asset('storage/'.$post->image) }}" 
                    alt="{{ $post->category->name }}" class="img-fluid mt-3">
                </div>

                @else
                    <img src="https://source.unsplash.com/680x300/?{{ $post->category->name }}" 
                    alt="{{ $post->category->name }}" class="img-fluid mt-3">
                @endif
            <article class="my-3">
                {!! $post->body !!} 
            </article>   
        </div>
    </div>
</div>
@endsection