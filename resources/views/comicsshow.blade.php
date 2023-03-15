@extends('layout.app') {{-- estende in layout  --}}

@section('head_title')
    Laravel DC Comics | Comic {{ $comic->id }}
@endsection {{-- segnaposto dentro head  --}}

@section('body_main')
    {{-- segnaposto dentro body  --}}

    <main>
        <div class="main_jumbotron">
        </div>
        <div class="main_current__series">
            <div>
                <div class="container">
                    <div class="title-section">
                        <h2>comic {{ $comic->id }}</h2>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2 comic_series">
                        <div class="col order-2 order-md-1">
                            <div class="card h-100">
                                <div class="card-body text-light">
                                    <h5 class="card-title">{{ $comic->series }}</h5>
                                    <h6 class="card-subtitle  mb-3 text-muted">{{ $comic->title }}</h6>

                                    <div class="mb-3">
                                        <span class="me-3">
                                            {{ $comic->sale_date }}
                                        </span>
                                        <span class="badge bg-success">
                                            {{ $comic->type }}
                                        </span>
                                    </div>

                                    <span class="fwbold">Description<br> </span>
                                    <p class="card-text">{{ $comic->description }}</p>

                                    <div class="mb-3">
                                        <span>
                                            {{ $comic->price }} $
                                        </span>
                                    </div>


                                    {{-- <p class="card-text">
                                    <span class="fwbold">Writers<br> </span> {{ implode(', ', $comics['writers']) }}
                                </p> --}}
                                    <a class="btn btn-success disabled" href="#" role="button"
                                        aria-disabled="true">Acquista</a>
                                    <a class="btn btn-outline-info" href="{{ route('comics.index') }}"
                                        role="button">Indietro</a>
                                </div>
                            </div>
                        </div>
                        <div class="col order-1 order-md-2 mb-5 mb-md-0">
                            <img src="{{ $comic->url }}" class="rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
