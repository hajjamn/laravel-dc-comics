@extends('layouts.app')

@section('title', 'Comics')
    
@section('content')

  <main>
    <div class="container">
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
                <img src="{{$comic->thumb}}" alt="">
              </td>
              <td>{{$comic->title}}</td>
              <td>{{$comic->price}}</td>
              <td>{{$comic->series}}</td>
              <td>{{$comic->sale_date}}</td>
              <td>{{$comic->type}}</td>
              <td>Pulsanti</td>
            </tr>
              
          @endforeach
        </tbody>
      </table>
    </div>
  </main>
    
@endsection