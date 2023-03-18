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
                            <h5 class="mb-3">
                                Errori
                            </h5>
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
                            <label for="title_comic" class="form-label @error('title_comic') text-danger @enderror">titolo *</label>
                            <input 
                            type="text" 
                            class="form-control @error('title_comic') is-invalid @enderror" 
                            name="title_comic" 
                            id="title_comic"
                            placeholder="Scrivi il titolo del Comic" 
                            maxlength="255" 
                            value="{{ old('title_comic') }}"
                            required
                            >
                            @error('title_comic')
                            <div class="alert alert-danger mt-4" role="alert">
                                {{ $message }} 
                              </div>
                             @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description_comic" class="form-label @error('description_comic') text-danger @enderror">descrizione</label>
                            <textarea 
                            class="form-control @error('description_comic') is-invalid @enderror" 
                            name="description_comic" 
                            id="description_comic" 
                            rows="3"
                            placeholder="Scrivi la descrizione del Comic"
                            >{{ old('description_comic') }}</textarea>
                            @error('description_comic')
                            <div class="alert alert-danger mt-4" role="alert">
                                {{ $message }} 
                              </div>
                             @enderror
                        </div>
                        <div class="mb-3">
                            <label for="url_comic" class="form-label @error('url_comic') text-danger @enderror">url immagine</label>
                            <input 
                            type="text" 
                            class="form-control @error('url_comic') is-invalid @enderror" 
                            name="url_comic" 
                            id="url_comic"
                            placeholder="Inserisci qui l'url dell'img del Comic" 
                            maxlength="255"
                            value="{{ old('url_comic') }}"
                            >
                            @error('url_comic')
                            <div class="alert alert-danger mt-4" role="alert">
                                {{ $message }} 
                              </div>
                             @enderror
                        </div>
                        <div class="mb-3">
                            <label for="price_comic" class="form-label @error('price_comic') text-danger @enderror">prezzo *</label>
                            <input 
                            type="number" 
                            class="form-control @error('price_comic') is-invalid @enderror" 
                            name="price_comic" 
                            id="price_comic"
                            placeholder="Scrivi il prezzo del Comic" 
                            step="0.01" max="9999.99"
                            value="{{ old('price_comic') }}"
                            required
                            >
                            @error('price_comic')
                            <div class="alert alert-danger mt-4" role="alert">
                                {{ $message }} 
                              </div>
                             @enderror
                        </div>
                        <div class="mb-3">
                            <label for="series_comic" class="form-label @error('title_comic') text-danger @enderror">serie *</label>
                            <input 
                            type="text" 
                            class="form-control @error('series_comic') is-invalid @enderror" 
                            name="series_comic" 
                            id="series_comic"
                            placeholder="Scrivi la series del Comic"
                            maxlength="30" 
                            value="{{ old('series_comic') }}"
                            required
                            >
                            @error('series_comic')
                            <div class="alert alert-danger mt-4" role="alert">
                                {{ $message }} 
                              </div>
                             @enderror
                        </div>
                        <div class="mb-3">
                            <label for="sale_date_comic" class="form-label @error('sale_date_comic') text-danger @enderror">data di vendita *</label>
                            <input 
                            type="date" 
                            class="form-control @error('sale_date_comic') is-invalid @enderror" 
                            name="sale_date_comic" 
                            id="sale_date_comic"
                            placeholder="Scrivi la data del Comic" 
                            value="{{ old('sale_date_comic') }}"
                            required
                            >
                            @error('sale_date_comic')
                            <div class="alert alert-danger mt-4" role="alert">
                                {{ $message }} 
                              </div>
                             @enderror
                        </div>
                        <div class="mb-3">
                            <label for="type_comic" class="form-label @error('type_comic') text-danger @enderror">tipo *</label>
                            <input 
                            type="text" 
                            class="form-control @error('type_comic') is-invalid @enderror" 
                            name="type_comic" 
                            id="type_comic"
                            placeholder="Scrivi il type del Comic" 
                            maxlength="30" 
                            value="{{ old('type_comic') }}"
                            required>
                            @error('type_comic')
                            <div class="alert alert-danger mt-4" role="alert">
                                {{ $message }} 
                              </div>
                             @enderror
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
