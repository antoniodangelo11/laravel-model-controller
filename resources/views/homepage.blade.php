@extends('layouts.base')

@section('contents')
<section class="bg-body-secondary" style="height: 100vh">
    <div class="container" style="height: 100vh">
        <div class="row row-cols-5">
            @foreach ($movies as $movie)
                <div class="col py-4">
                    @include('partials.card')
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
