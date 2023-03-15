@extends('layout.admin') {{-- estende in layout  --}}

@section('head_title')
    Laravel DC Comics | Comics
@endsection {{-- segnaposto dentro head  --}}

@section('body_main')
    {{-- segnaposto dentro body  --}}

    <main>
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

    </main>
@endsection
