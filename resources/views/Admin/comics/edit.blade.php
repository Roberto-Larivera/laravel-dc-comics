@extends('layout.admin.app') {{-- estende in layout  --}}

@section('head_title')
    Laravel DC Comics | Comics
@endsection {{-- segnaposto dentro head  --}}

@section('body_main')
    {{-- segnaposto dentro body  --}}

    <main>
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <form action="{{ route('comics.update',$comic->id) }}" method="POST" class="form_create">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="title" class="form-label">titolo *</label>
                            <input type="text" value="{{ $comic->title }}" class="form-control" name="title"
                                id="title" placeholder="Scrivi il titolo del Comic" maxlength="255" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">descrizione *</label>
                            <textarea class="form-control" name="description" id="description" rows="5"
                                placeholder="Scrivi la descrizione del Comic" required>{{ $comic->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="url" class="form-label">url immagine *</label>
                            <input type="text" value="{{ $comic->url }}" class="form-control" name="url"
                                id="url" placeholder="Inserisci qui l'url dell'img del Comic" maxlength="255"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">prezzo *</label>
                            <input type="text" value="{{ $comic->price }}" class="form-control" name="price"
                                id="price" placeholder="Scrivi il prezzo del Comic" maxlength="9" required>
                        </div>
                        <div class="mb-3">
                            <label for="series" class="form-label">serie *</label>
                            <input type="text" value="{{ $comic->series }}" class="form-control" name="series"
                                id="series" placeholder="Scrivi la series del Comic" maxlength="30" required>
                        </div>
                        <div class="mb-3">
                            <label for="sale_date" class="form-label">data di vendita *</label>
                            <input type="date" value="{{ $comic->sale_date }}" class="form-control"
                                name="sale_date" id="sale_date" placeholder="Scrivi la data del Comic" required>
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">tipo *</label>
                            <input type="text" value="{{ $comic->type }}" class="form-control" name="type"
                                id="type" placeholder="Scrivi il type del Comic" maxlength="30" required>
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
