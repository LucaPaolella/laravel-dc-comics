@extends('layout.app')

@section('page.title')
<div class="container">
    Elenco Fumetti
</div>
@endsection

@section('page.main')

<div class="container">
    <a href="{{ route('comics.create') }}" class="btn btn-success">Film</a>
    <table class="table">
        <thead>
            <tr>

                <th>Title</th>
                <th>Description</th>
                <th>Thumbnail</th>
                <th>Price</th>
                <th>Series</th>
                <th>Sale Date</th>
                <th>Type</th>
                <th>Artists</th>
                <th>Writers</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comics as $comic)
            <tr>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->description }}</td>
                <td>
                    @if($comic->thumb)
                    <img src="{{ $comic->thumb }}" alt="Thumbnail" width="100">
                    @endif
                </td>
                <td>{{ $comic->price }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->sale_date }}</td>
                <td>{{ $comic->type }}</td>
                <td>{{ $comic->artists }}</td>
                <td>{{ $comic->writers }}</td>
                <td>{{ $comic->created_at }}</td>
                <td>{{ $comic->updated_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <button onclick="confermaCancellazione()">Delete</button>


    <button id="deleteButton">Delete</button>
    <script>
        const deleteButton = document.getElementById('deleteButton');
        deleteButton.addEventListener('click', confermaCancellazione);
    </script>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


</div>

<script src="main.js"></script>

@endsection