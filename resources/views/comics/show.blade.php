@extends('layouts.app')

@section('title', $comic->title)

@section('content')

<main class="py-5">
  <section>
    <div class="container">
      <h1>Pagina di dettaglio di: {{$comic->title}}</h1>
    </div>
    <div class="container">
      Roba che poi metterò, giuro!
    </div>
  </section>
</main>
    
@endsection