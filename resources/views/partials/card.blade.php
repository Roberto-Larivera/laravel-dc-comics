@foreach($comics as $comic)
<div class="col mb-5 mb-md-0">
    
    <a href="{{  route('comics.show', $comic->id) }}" class="text-decoration-none">
        <div class="box w-100">
            <div class="box_image">
                <img src="{{ $comic['url'] }}" >
                {{-- <img src="https://picsum.photos/200/300" > --}}
            </div>
            <h3 class="text-break">{{ $comic['series'] }}</h3>
        </div>
    </a>

</div>
@endforeach