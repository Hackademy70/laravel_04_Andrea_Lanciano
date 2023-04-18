{{-- CARD --}}
<div class="card text-bg-secondary my-3 mx-2" style="max-width: 18rem;">
    <div class="card-header">{{ $comicTitle }}</div>
    <div class="card-body">
        <p class="card-title">{{ $comicYear }}</p>
        <p class="card-text">{!! Str::limit($comicDescription, 50) !!}</p>
        <a class="" href="singleCard/{{ $comicId }}">Scopri di più...</a>
    </div>
</div>