@extends('layout/main')


@section('container')
    <h1 class="p-5">Post Categories</h1>
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/posts?category={{ $category->slug }}">
                        <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/680x300/?{{ $category->name }}" 
                            class="card-img" alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill" style="background-color: rgba(0,0,0,0.60)">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    {{-- @foreach ($categories as $category)
    <ul>
        <li>
            <h3><a href="/categories/{{ $category->slug }}"> {{ $category->name }}</a></h3>
        </li>
    </ul>
            
    @endforeach --}}
@endsection

