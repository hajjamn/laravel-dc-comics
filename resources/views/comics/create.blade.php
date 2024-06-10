@extends('layouts.app')

@section('title', 'Create new Comic')

@section('content')

<main class="py-5">
  <section>
    <div class="container">
      <h2>Crea nuovo fumetto</h2>
    </div>
    <div class="container">
      <form action="{{ route('comics.store') }}" method="POST">

         {{-- ????? --}}
         @csrf

        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="Title">
        </div>
        <div class="mb-3">
          <label for="thumb" class="form-label">Thumb</label>
          <input type="url" name="thumb" class="form-control" id="thumb" placeholder="www.explample.com/1.jpg" value="https://picsum.photos/200/300">
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">price</label>
          <input type="text" name="price" class="form-control" id="price" placeholder="10.00$">
        </div>
        <div class="mb-3">
          <label for="series" class="form-label">series</label>
          <input type="text" name="series" class="form-control" id="series" placeholder="Series">
        </div>
        <div class="mb-3">
          <label for="type" class="form-label">Type</label>
          <input type="text" name="type" class="form-control" id="type" placeholder="Type">
        </div>
        <div class="mb-3">
          <label for="sale_date" class="form-label">sale_date</label>
          <input type="date" name="sale_date" class="form-control" id="sale_date" placeholder="Type">
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">description</label>
          <textarea class="form-control" name="description" id="description" rows="3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi sint provident eaque molestias nobis dignissimos sapiente est, autem eligendi, harum deserunt! Omnis ab ipsa beatae dignissimos placeat quis tempora? Velit! </textarea>
        </div>
        <button class="btn btn-primary">Create</button>
      </form>
    </div>
  </section>
</main>
    
@endsection