@extends('layouts.admin')
@section('content')
    <div class="mt-3 mb-3">
        <h3 class="text-white">EDIT TYPE</h3>
    </div>
    <form class="mt-5" action="{{route('admin.types.update', $type->slug)}}" method="POST">
        @csrf
        @method('PUT')
            <label for="typesText">Technology</label>
            <input type="text" name="name" id="typesText" class=" @error('name') is-invalid @enderror"  value="{{$type->name}}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button type="submit">Send</button>
    </form>
@endsection