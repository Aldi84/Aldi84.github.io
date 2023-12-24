@extends('layout/main')
@section('container')
{{-- <div class="row-100 align-items-md-stretch" style="background-color: rgba(22, 25, 25, 0.945)" style="width: 100px"> --}}
    
    <h1 class="p-5 text-center">{{ $title }}</h1>

    <div class="row justify-content-center">
        <div class="col-md-6 mb-3">
            <form action="/posts">
                @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="search.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
    {{-- ini card pertama yang paling gede --}}
        <div class="card post-banyak mb-2" >
            
            @if ($posts[0]->image)
            <div style="max-height: 350px; overflow:hidden" class="justify-content-center">
                <img src="{{ asset('storage/'.$posts[0]->image) }}" 
                alt="{{ $posts[0]->category->name }}" class="img-fluid" style="width: 100%">
            </div>

            @else
            <img src="https://source.unsplash.com/1200x300/?{{ $posts[0]->category->name }}" 
            class="card-img-top" alt="{{ $posts[0]->category->name }}">
            
            @endif
            
            <div class="card-body text-center">
                <h4 class="card-title" ><a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none text-dark"><b>
                    {{ $posts[0]->title }}</b></a></h4>

                <p>
                    <small class="text-muted"> 
                        by <a href="/posts?author={{ $posts[0]->user->username }}" class="text-decoration-none"><i>{{  $posts[0]->user->name }}</i></a> 
                        in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none"><i>  {{ 
                    $posts[0]->category->name }} </i></a>{{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>            
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more :></a></a>
            </div>
        </div>
    {{-- </div> --}}

        <div class="container mb-4">
    
        
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                {{-- colom/post yg kotak kecil --}}
                <div class="card">
                    <div class="position-absolute text-light" style="background-color: rgba(0,0,0,0.52)" class="text-light">
                        <a href="/posts?category={{ $post->category->slug }}" class="text-light text-decoration-none">{{ $post->category->name }} </a></div>
                        
                        @if ($post->image)
                        <div style="max-height: 88px; overflow:hidden">
                            <img src="{{ asset('storage/'.$post->image) }}" 
                            alt="{{ $post->category->name }}" class="img-fluid">
                        </div>
        
                        @else
                        <div style="max-height: 88px; overflow:hidden">
                            <img src="https://source.unsplash.com/1200x300/?{{ $post->category->name }}" 
                            class="card-img-top" alt="{{ $post->category->name }}">
                        </div>
                        @endif
                            
                    <div class="card-body"  >
                    <h5 class="card-title">{{ $post->title }}</h5>
                    {{-- ini buat author di kotak kecil yg bisa dipencet --}}
                    <p>
                        <small class="text-muted"> 
                            by <a href="/posts?author={{ $post->user->username }}" class="text-decoration-none">{{  $post->user->name }} </a> 
                            {{ $post->created_at->diffForHumans() }}
                        </small>
                    </p>            
        
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read more :></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{-- @foreach ($posts->skip(1) as $post)
        <article class="mb-5 border-bottom pb-3">    

            <h3><a href="/post/{{ $post->slug }}" class="text-decoration-none"> {{ $post->title }}</a></h3>

            <p>by <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{  $post->user->name }} </a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none"> {{ 
            $post->category->name }} </a></p>
           
           <p>{{ $post->excerpt }}</p>
            <a href="/post/{{ $post->slug }}" class="text-decoration-none">Read more.</a>
        </article>
    @endforeach --}}

    @else 
    <p class="text-center" class="fs-4">Silahkan cari kembali.</p>    

    @endif
    <div class="d-flex justify-content-center">
   {{ $posts->links() }}
    </div>
</div
    @endsection

