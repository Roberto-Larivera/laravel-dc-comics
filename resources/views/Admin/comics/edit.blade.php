@extends('layout.admin.app') {{-- estende in layout  --}}

@section('head_title')
    Laravel DC Comics | Comics
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
                    <form action="{{ route('comics.update',$comic->id) }}" method="POST" class="form_create">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="title_comic" class="form-label">titolo *</label>
                            <input 
                            type="text" 
                            class="form-control" 
                            name="title_comic" 
                            id="title_comic"
                            placeholder="Scrivi il titolo del Comic" 
                            maxlength="255" 
                            value="{{ old('title_comic',$comic->title) }}"
                            required
                            >
                            @error('title_comic')
                            <div class="alert alert-danger mt-4" role="alert">
                                {{ $message }} 
                              </div>
                             @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description_comic" class="form-label">descrizione</label>
                            <textarea 
                            class="form-control" 
                            name="description_comic" 
                            id="description_comic" 
                            rows="3"
                            placeholder="Scrivi la descrizione del Comic"
                            >{{ old('description_comic',$comic->description) }}</textarea>
                            @error('description_comic')
                            <div class="alert alert-danger mt-4" role="alert">
                                {{ $message }} 
                              </div>
                             @enderror
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
                            value="{{ old('url_comic',$comic->url) }}"
                            >
                            @error('url_comic')
                            <div class="alert alert-danger mt-4" role="alert">
                                {{ $message }} 
                              </div>
                             @enderror
                        </div>
                        <div class="mb-3">
                            <label for="price_comic" class="form-label">prezzo *</label>
                            <input 
                            type="number" 
                            class="form-control" 
                            name="price_comic" 
                            id="price_comic"
                            placeholder="Scrivi il prezzo del Comic" 
                            step="0.01" max="9999.99"
                            value="{{ old('price_comic',$comic->price) }}"
                            required
                            >
                            @error('price_comic')
                            <div class="alert alert-danger mt-4" role="alert">
                                {{ $message }} 
                              </div>
                             @enderror
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
                            value="{{ old('series_comic',$comic->series) }}"
                            required>
                            @error('series_comic')
                            <div class="alert alert-danger mt-4" role="alert">
                                {{ $message }} 
                              </div>
                             @enderror
                        </div>
                        <div class="mb-3">
                            <label for="sale_date_comic" class="form-label">data di vendita *</label>
                            <input 
                            type="date" 
                            class="form-control" 
                            name="sale_date_comic" 
                            id="sale_date_comic"
                            placeholder="Scrivi la data del Comic" 
                            value="{{ old('sale_date_comic',$comic->sale_date) }}"
                            required>
                            @error('sale_date_comic')
                            <div class="alert alert-danger mt-4" role="alert">
                                {{ $message }} 
                              </div>
                             @enderror
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
                            value="{{ old('type_comic',$comic->type) }}"
                            required>
                            @error('type_comic')
                            <div class="alert alert-danger mt-4" role="alert">
                                {{ $message }} 
                              </div>
                             @enderror
                        </div>
                        <div class="mb-5">
                            <p>
                                I campi contrassegnati con * sono <strong>obbligatori</strong>
                            </p>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success me-4">Conferma</button>
                        </form>

                            <a href="{{ route('comics.index', $comic->id) }}" class="btn btn-outline-primary me-5">
                                Torna indietro
                            </a>
                            @include('admin.comics.partials.delete')
                        </div>
                </div>
            </div>
        </div>
    </main>
@endsection
