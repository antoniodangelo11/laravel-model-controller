<div class="myCard">
    <div class="innerCard">
        <div class="frontSide">
            <img class="h-100 rounded w-100" src="{{ Vite::asset('resources/img/' . $movie->img) }}" alt="">
        </div>
        <div class="backSide rounded">
            <h5 class="card-title">Titolo: {{ $movie->title }}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Titolo originale: {{ $movie->original_title }}</h6>
            <p class="card-text">Nazionalità: {{ $movie->nationality}}</p>
            <p class="card-text">Data: {{ $movie->date}}</p>
            <p class="card-text">Voto: {{ $movie->vote}}</p>
        </div>
    </div>
</div>