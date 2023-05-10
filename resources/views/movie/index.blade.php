@extends ('layouts/main')

@section('content')
  Tutti i Film:
  <ul>
    @foreach ($movies as $movie)
      <li>
        {{$movie->title}} - {{$movie->original_title}} - {{$movie->nationality}} - {{$movie->date}} - {{$movie->vote}} 
      </li>        
    @endforeach
  </ul>
@endsection