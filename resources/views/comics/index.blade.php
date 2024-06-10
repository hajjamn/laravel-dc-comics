@extends('layouts.app')

@section('title', 'Comics')
    
@section('content')

  <main>
    <div class="container py-5">
      <h1>Comics</h1>
    </div>
    
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>Cover</th>
            <th>Title</th>
            <th>Price</th>
            <th>Series</th>
            <th>Sale Date</th>
            <th>Type</th>
            <th>{{-- fill --}}</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($comics as $comic)

            <tr>
              <td>
                <div class="my-table-thumb">
                  <a href="{{ route('comics.edit', $comic) }}">
                    <img src="{{$comic->thumb}}" alt="">
                  </a>
                </div>
              </td>
              <td><a href="{{ route('comics.show', $comic) }}">
                <span>{{$comic->title}}</span>
              </a></td>
              <td>{{$comic->price}}</td>
              <td>{{$comic->series}}</td>
              <td>{{$comic->sale_date}}</td>
              <td>{{$comic->type}}</td>
              <td>
                <a href="{{ route('comics.edit', $comic) }}">
                  <button class="btn btn-primary mb-3">Edit</button>
                </a>
                <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button class="btn btn-danger">Delete</button>
                </form>
              </td>
            </tr>
              
          @endforeach
        </tbody>
      </table>
    </div>
  </main>
    
@endsection