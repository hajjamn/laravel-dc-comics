@extends('layouts.app')

@section('title', $comic->title)

@section('content')

<main class="py-5">
  <section>
    <div class="container">
      <div class="card">
         <div class="card-header">
           <h1>Pagina di dettaglio di: {{$comic->title}}</h1>
         </div>
         <div class="card-body">
          <ul class="list-group">
            <li class="list-group-item">
              <img src="{{ $comic->thumb }}" alt="">
            </li>
            <li class="list-group-item">
              <p>Release date: {{ $comic->sale_date }}</p>
            </li>
            <li class="list-group-item">
              <p>Price: {{ $comic->price }}</p>
            </li>
            <li class="list-group-item">
              <p>Series: {{ $comic->series }}</p>
            </li>
            <li class="list-group-item">
              <p>{{ $comic->description }}</p>
            </li>
          </ul>
         </div>
         <div class="card-footer">
          <p>
            <a href="{{ route('comics.edit', $comic) }}">
              <button class="btn btn-primary mb-3">Edit</button>
            </a>
          </p>
          <p>
            <form action="{{ route('comics.destroy', $comic) }}" method="POST">
              @method('DELETE')
              @csrf
              <button class="btn btn-danger">Delete</button>
            </form>
          </p>
         </div>
      </div>
    </div>
  </section>
</main>
    
@endsection