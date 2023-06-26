@extends('layouts.base')

@section('contents')
    <div class="container">
        <div class="row row-cols-4">
            @foreach ($movies as $movie)
                <div class="col py-4">
                    @include('partials.card')
                </div>
            @endforeach
        </div>
    </div>
@endsection
