@extends('layout/main')

@section('container')


<header class="expand-lg">
    
    <h1 class="p-4 text-center mb-0" style="background-color: rgb(40, 42, 50)"><p></p>{{ $title }}</h1>
    <div class=" d-flex mt-0" style=" height:593px">
        <div class="foto_about">
            <div class=" text-white p-3">
                <h3 class="text-center">{{ $name }}</h3>
                <img src="img/{{ $image }}" width="150" alt="{{ $name }}" style="background-color:azure" class="img-thumbnail img-fluid rounded-circle"> 
                <p></p>
                <p>{{ $email }}</p>
            </div>
        </div>
        
        <div class="row-100 align-items-md-stretch" style="background-color: rgba(18, 19, 22, 0.679)" >
            <br>
            <div class="col">
                <div class=" p-5 text-white rounded-3">
                    <h2>Change the background</h2>
                    <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
                    <button class="btn btn-outline-light" type="button">Example button</button>
                </div>
            </div>
        </div>
    </div>
</header>
        @endsection