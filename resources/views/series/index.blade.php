<x-layout title="Séries">
  <ul class="list-group mb-3">
    @foreach ($series as $serie)
      <li class="list-group-item">{{ $serie->id }} -> {{ $serie->nome }}</li>
    @endforeach
  </ul>

  <a href="/series/criar" class="btn btn-dark mb-2">Adicionar</a>
</x-layout>
