@extends('layout.app') {{-- estende in layout  --}}

@section('head_title')
    Laravel DC Comics | Show {{ $comic->id }}
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
                <a href="{{ route('comics.index') }}">Torna indietro</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        {{ $comic->id}}
                    </li>
                    <li>
                        {{ $comic->title}}
                    </li>
                    <li>
                        {{ $comic->description}}
                    </li>
                    <li>
                        {{ $comic->url}}
                    </li>
                    <li>
                        {{ $comic->price}}
                    </li>
                    <li>
                        {{ $comic->series}}
                    </li>
                    <li>
                        {{ $comic->sale_date}}
                    </li>
                    <li>
                        {{ $comic->type}}
                    </li>
                </ul>
            </div>
        </div>
       </div>
    </main>
@endsection