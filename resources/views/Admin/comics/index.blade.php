@extends('layout.admin.app') {{-- estende in layout  --}}

@section('head_title')
    Laravel DC Comics | Comics
@endsection {{-- segnaposto dentro head  --}}

@section('body_main')
    {{-- segnaposto dentro body  --}}

    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titolo</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Azioni</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comics as $comic)
                                <tr>
                                    <th scope="row">{{ $comic->id }}</th>
                                    <td>{{ $comic->title }}</td>
                                    <td>{{ $comic->type }}</td>
                                    <td>
                                        <a href="{{ route('comics.show',$comic->id) }}" class="btn btn-primary">
                                            Vedi
                                        </a>
                                        <a href="{{ route('comics.edit',$comic->id) }}" class="btn btn-warning">
                                            Aggiorna
                                        </a>
                                        <a href="#" class="btn btn-danger">
                                            ?
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
