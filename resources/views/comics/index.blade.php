@extends('layouts.app')

@section('title', 'Comics')
    
@section('content')

  <main>
    <div class="container">
      <h1>Comics</h1>
    </div>
    
    <div class="container">
      @dump($comics)
    </div>
  </main>
    
@endsection