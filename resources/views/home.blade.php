@extends('layout.app') {{-- estende in layout  --}}

@section('head_title')
    Laravel DC Comics
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
                <a href="{{ route('comics.index') }}">Vedi tutti</a>
            </div>
        </div>
       </div>
    </main>
@endsection
