@extends('layout.app') {{-- estende in layout  --}}

@section('head_title')
    Laravel DC Comics | Create
@endsection {{-- segnaposto dentro head  --}}

@section('body_main')
    {{-- segnaposto dentro body  --}}

    <main>
       <div class="container">
        <div class="row">
            <div class="col">
                <h1>
                    Laravel DC Comics | Create
                </h1>
            </div>
            <div class="col">
                <a href="{{ route('comics.index') }}">Torna indietro</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title_comic" class="form-label">titolo comic</label>
                        <input type="text" class="form-control" name="title_comic" id="title_comic" placeholder="Scrivi il titolo del Comic" maxlength="255">
                      </div>
                      <div class="mb-3">
                        <label for="description_comic" class="form-label">descrizione comic</label>
                        <textarea class="form-control" name="description_comic" id="description_comic" rows="3" placeholder="Scrivi la descrizione del Comic"></textarea>
                      </div>
                      <div class="mb-3">
                          <label for="url_comic" class="form-label">url image comic</label>
                          <input type="text" class="form-control" name="url_comic" id="url_comic" placeholder="Inserisci qui l'url dell'img del Comic" maxlength="255">
                        </div>
                        <div class="mb-3">
                          <label for="price_comic" class="form-label">prezzo comic</label>
                          <input type="text" class="form-control" name="price_comic" id="price_comic" placeholder="Scrivi il prezzo del Comic" maxlength="9">
                        </div>
                        <div class="mb-3">
                          <label for="series_comic" class="form-label">series comic</label>
                          <input type="text" class="form-control" name="series_comic" id="series_comic" placeholder="Scrivi la series del Comic" maxlength="30">
                        </div>
                        <div class="mb-3">
                          <label for="sale_date_comic" class="form-label">data comic</label>
                          <input type="date" class="form-control" name="sale_date_comic" id="sale_date_comic" placeholder="Scrivi la data del Comic">
                        </div>
                        <div class="mb-3">
                          <label for="type_comic" class="form-label">type comic</label>
                          <input type="text" class="form-control" name="type_comic" id="type_comic" placeholder="Scrivi il type del Comic" maxlength="30">
                        </div>
                        <button type="submit" class="btn btn-success">Salva</button>
                </form>
            </div>
        </div>
       </div>
    </main>
@endsection