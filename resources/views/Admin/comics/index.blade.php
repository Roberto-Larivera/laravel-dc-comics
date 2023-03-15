@extends('layout.app') {{-- estende in layout  --}}

@section('head_title')
    Laravel DC Comics | Comics
@endsection {{-- segnaposto dentro head  --}}

@section('body_main')
    {{-- segnaposto dentro body  --}}

    <main>
        <div class="main_jumbotron">
        </div>
        <div class="main_current__series">
            <div>
                <div class="container position-relative">
                    <div class="title-section position-absolute top-0 start-0">
                        <h2>current series</h2>
                    </div>
                    <div class="series_boxs row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-6 gx-4 gy-5">
                        {{-- Include di Card --}}
                       @include('partials.card')
                    </div>
                    <button class="mt-5">load more</button>
                </div>
            </div>
        </div>
        
       {{-- <div class="container">
        <div class="row">
            <div class="col">
                <h1>
                    Laravel DC Comics | Comics
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
       </div> --}}
    </main>
@endsection