@extends('layout.app') {{-- estende in layout  --}}

@section('head_title')
    Laravel DC Comics | Comics
@endsection {{-- segnaposto dentro head  --}}

@section('body_main')
    {{-- segnaposto dentro body  --}}

    <main>
       <div class="container">
        <div class="row">
            <div class="col">
                <h1>
                    Laravel DC Comics
                </h1>
            </div>
            <div class="col">
                <a href="{{ route('home') }}">Torna indietro</a>
            </div>
        </div>
        <div class="row">
            @foreach ($comics as $comic)  
            <div class="col">
                <ul>
                    <li>
                        {{ $comic->id}}
                    </li>
                    <li>
                        {{ $comic->title}}
                    </li>
                </ul>
                <a href="{{ route('comics.show', $comic->id) }}">+ info</a>
            </div>
            @endforeach
        </div>
       </div>
    </main>
@endsection