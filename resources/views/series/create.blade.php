<x-layout title="Nova Série">
  <form action="/series/salvar" method="POST">
    @csrf
    <div class="mb-3">
      <label for="nome" class="form-label">Série:</label>
      <input type="text" class="form-control" placeholder="Insira aqui o nome da série" aria-label="Nome da série" name="nome" id="nome">
    </div>
    <button type="submit" class="btn btn-success">Adicionar</button>
    <a href="/series"><button type="button" class="btn btn-secondary">Voltar</button></a>
  </form>
</x-layout>