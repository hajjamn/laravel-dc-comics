@extends('layouts.app')

@section('title', 'Create new Comic')

@section('content')

<main class="py-5">
  <section>
    <div class="container">
      <h2>Crea nuovo fumetto</h2>
    </div>
    <div class="container">
      <form action="">
        
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="email" name="title" class="form-control" id="title" placeholder="Title">
        </div>
        <div class="mb-3">
          <label for="thumb" class="form-label">Thumb</label>
          <input type="email" name="thumb" class="form-control" id="thumb" placeholder="Title">
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">price</label>
          <input type="email" name="price" class="form-control" id="price" placeholder="Title">
        </div>
        <div class="mb-3">
          <label for="series" class="form-label">series</label>
          <input type="email" name="series" class="form-control" id="series" placeholder="Title">
        </div>
        <div class="mb-3">
          <label for="type" class="form-label">type</label>
          <input type="email" name="type" class="form-control" id="type" placeholder="Title">
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>
        <button class="btn btn-primary">Crea</button>
      </form>
    </div>
  </section>
</main>
    
@endsection