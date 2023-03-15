<form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="d-inline">
@csrf
@method('DELETE')

<button type="submit" class="btn btn-outline-danger">
    Elimina
</button>
</form>