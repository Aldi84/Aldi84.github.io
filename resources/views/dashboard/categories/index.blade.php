@extends('dashboard.layout.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Categories Post</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-info col-lg-8 text-center" role="alert">
{{session('success')}}
</div>
@endif

<div class="table-responsive col-lg-8">
  <a href="/dashboard/categories/create" class="btn btn-primary mb-3"> Create new category</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
            
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $category->name }}</td>
          <td>
            {{-- view --}}
            <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info">View</span></a>
            {{-- edit --}}
            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning">Edit</span></a>
            {{-- delete --}}
            <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('are you sure delete this?')">Delete</button>
            {{-- <a href="#" class="badge bg-danger">Delete</span></a> --}}
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection