@extends ('layouts/main')
<h2>Lista dei Film</h2>

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Titolo Originale</th>
                <th scope="col">Nazionalità</th>
                <th scope="col">Data di Uscita</th>
                <th scope="col">Voto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->original_title }}</td>
                    <td>{{ $movie->nationality }}</td>
                    <td>{{ $movie->date }}</td>
                    <td>{{ $movie->vote }} </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
