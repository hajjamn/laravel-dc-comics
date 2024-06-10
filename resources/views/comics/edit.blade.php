@extends('layouts.app')

@section('title', 'Create new Comic')

@section('content')

<main class="py-5">
  <section>
    <div class="container">
      <h2>Edit comic: {{ $comic->title }}</h2>
    </div>
    <div class="container">
      <form action="{{ route('comics.update', $comic) }}" method="POST">

         {{-- Cross Site Request Forgering --}}
         @csrf
         @method('PUT')

        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" name="title" class="form-control" id="title" value="{{ $comic->title }}">
        </div>
        <div class="mb-3">
          <label for="thumb" class="form-label">Thumb</label>
          <input type="url" name="thumb" class="form-control" id="thumb" placeholder="www.explample.com/1.jpg" value="{{ $comic->thumb }}">
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">price</label>
          <input type="text" name="price" class="form-control" id="price" value="{{ $comic->price }}">
        </div>
        <div class="mb-3">
          <label for="series" class="form-label">series</label>
          <input type="text" name="series" class="form-control" id="series" value="{{ $comic->series }}">
        </div>
        <div class="mb-3">
          <label for="type" class="form-label">Type</label>
          <input type="text" name="type" class="form-control" id="type" value="{{ $comic->type }}">
        </div>
        <div class="mb-3">
          <label for="sale_date" class="form-label">sale_date</label>
          <input type="date" name="sale_date" class="form-control" id="sale_date" value="{{ $comic->sale_date }}">
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">description</label>
          <textarea class="form-control" name="description" id="description" rows="3">{{ $comic->description }}</textarea>
        </div>
        <button class="btn btn-primary">Edit</button>
      </form>
    </div>
  </section>
</main>
    
@endsection