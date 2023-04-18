<x-layout>
    <div class="container my-3">
        <h1>Scopriamo insieme il nostro film:</h1>
        <div class="row">
            <div class="col my-5">
                <h3>{{ $comic['title'] }}</h3>
                <p>{{ $comic['year'] }}</p>
                <p>{{ $comic['description'] }}</p>
            </div>
        </div>
    </div>
</x-layout>