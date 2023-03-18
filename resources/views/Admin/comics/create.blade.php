@extends('layout.admin.app') {{-- estende in layout  --}}

@section('head_title')
    Laravel DC Comics | Create
@endsection {{-- segnaposto dentro head  --}}

@section('body_main')
    {{-- segnaposto dentro body  --}}

    <main>
        <div class="container py-5">
            @if ($errors->any())
                <div class="row">
                    <div class="col">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col">
                    <form action="{{ route('comics.store') }}" method="POST" class="form_create">
                        @csrf
                        <div class="mb-3">
                            <label for="title_comic" class="form-label">titolo *</label>
                            <input 
                            type="text" 
                            class="form-control" 
                            name="title_comic" 
                            id="title_comic"
                            placeholder="Scrivi il titolo del Comic" 
                            maxlength="255" 
                            value="{{ old('title_comic') }}"
                            required
                            >
                        </div>
                        <div class="mb-3">
                            <label for="description_comic" class="form-label">descrizione</label>
                            <textarea 
                            class="form-control" 
                            name="description_comic" 
                            id="description_comic" 
                            rows="3"
                            placeholder="Scrivi la descrizione del Comic"
                            >{{ old('description_comic') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="url_comic" class="form-label">url immagine</label>
                            <input 
                            type="text" 
                            class="form-control" 
                            name="url_comic" 
                            id="url_comic"
                            placeholder="Inserisci qui l'url dell'img del Comic" 
                            maxlength="255"
                            value="{{ old('url_comic') }}"
                            >
                        </div>
                        <div class="mb-3">
                            <label for="price_comic" class="form-label">prezzo *</label>
                            <input 
                            type="text" 
                            class="form-control" 
                            name="price_comic" 
                            id="price_comic"
                            placeholder="Scrivi il prezzo del Comic" 
                            maxlength="9" 
                            value="{{ old('price_comic') }}"
                            required
                            >
                        </div>
                        <div class="mb-3">
                            <label for="series_comic" class="form-label">serie *</label>
                            <input 
                            type="text" 
                            class="form-control" 
                            name="series_comic" 
                            id="series_comic"
                            placeholder="Scrivi la series del Comic"
                            maxlength="30" 
                            value="{{ old('series_comic') }}"
                            required>
                        </div>
                        <div class="mb-3">
                            <label for="sale_date_comic" class="form-label">data di vendita *</label>
                            <input 
                            type="date" 
                            class="form-control" 
                            name="sale_date_comic" 
                            id="sale_date_comic"
                            placeholder="Scrivi la data del Comic" 
                            value="{{ old('sale_date_comic') }}"
                            required>
                        </div>
                        <div class="mb-3">
                            <label for="type_comic" class="form-label">tipo *</label>
                            <input 
                            type="text" 
                            class="form-control" 
                            name="type_comic" 
                            id="type_comic"
                            placeholder="Scrivi il type del Comic" 
                            maxlength="30" 
                            value="{{ old('type_comic') }}"
                            required>
                        </div>
                        <div class="mb-3">
                            <p>
                                I campi contrassegnati con * sono <strong>obbligatori</strong>
                            </p>
                        </div>
                        <button type="submit" class="btn btn-success">Salva</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
