<x-layout>

    @if(session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif



    <div class="container">
        <h1>Titoli del momento:</h1>
        <div class="row">
            @foreach ($comics as $element)
            <div class="col-12 col-sm-6 col-md-4">
                <x-comicscard
                comicId="{{ $element['id'] }}"
                comicTitle="{{ $element['title'] }}"
                comicYear="{{ $element['year'] }}"
                comicDescription="{{ $element['description'] }}"
                />
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
