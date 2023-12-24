@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit New Post</h1>
</div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/posts/{{ $post->slug }}" class="mt-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $post->title) }}">
          @error('title')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control" id="slug" name="slug" required value="{{ old('slug', $post->slug) }}"> 
          {{-- disable read only untuk ga kasih akses org buat edit slug di dashboard create --}}
        </div>


        
        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select class="form-select" name="category_id">
            @foreach ($categories as $category)
            @if (old('category_id', $post->category_id) == $category->id)
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else 
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
            @endforeach
          </select>
        </div>

        <div class="mb-3">
          <label for="image" class="form-label">Post Image</label>
          <input type="hidden" name="oldImage" value="{{ $post->image }}">
          @if ($post->image)
          <img src="{{ asset('storage/'. $post->image) }}" class="img-preview img-fluid">
          @else
          <img class="img-preview img-fluid">
          @endif
          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
        @error('image')
          <div class="invalid-feedback"> {{ $message }}</div>
        @enderror

        </div>

  
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea class="form-control @error('body') is-invalid @enderror" id="body" name="body" rows="3" 
            placeholder="tulis ulang isi bodynya" value="{{ old('body', $post->body) }}"></textarea>
            @error('body')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

         

        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>
{{-- scrip ini buat bikin auto ketik slugnya dari title di dashboard create --}}
<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
</script>

@endsection