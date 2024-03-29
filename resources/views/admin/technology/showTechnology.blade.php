@extends('layouts.admin')
@section('content')
    <div class="mt-3 mb-3">
        <h3 class="text-white">TECHNOLOGY DETAILS</h3>
    </div>
    @if (session('message'))
    <div class="toast show mt-3 align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
        <div class="toast-body">
            <p class="text-black fs-6 fw-medium">{{session('message')}} ---> è stato aggiornato correttamente</p>
        </div>
        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
    @endif
    <div class="card mt-5">
        <div class="card-body">
            <h4>title:</h4>
            <h3>{{$technology->title}}</h3>
            <hr class="border border-danger border-2 opacity-100">
            <p>slug:</p>
            <p> {{$technology->slug}}</p>
        </div>
      </div>
@endsection