@extends('layouts.main')

@section('container')
<h1 class="text-center">Halaman About</h1>
<div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <div class="shadow p-3 mb-5 bg-body-tertiary rounded text-center">
            <img src="img/{{ $image }}" alt="{{ $name }}" width="100px" height="100px">
            <h4>{{ $name }}</h4>
            <p>{{ $activity }}</p>
        </div>
    </div>
</div>
@endsection