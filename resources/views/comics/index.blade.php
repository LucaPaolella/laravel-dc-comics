@extends('layout.app')

@section('page.title')
<div class="container">
    Elenco Film
</div>
@endsection

@section('page.main')

<div class="container">
    <a href="{{ route('comics.create') }}" class="btn btn-success">Film</a>
    <table class="table">
        <thead>
            <tr>

                <th scope="col">Prova</th>
                <th scope="col">Prova</th>
                <th scope="col">Prova</th>
                <th scope="col">Prova</th>
                <th scope="col">Prova</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>

@endsection