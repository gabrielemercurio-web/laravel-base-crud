@extends('layouts.app')

@section('page_title', 'Tutti gli Studenti')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="mt-4 mb-4">Lista di tutti gli studenti</h1>
                <a class="btn btn-outline-primary" href="{{ route('students.create') }}">+ Nuovo studente</a>
                </div>

                <table class="table">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOME</th>
                            <th>COGNOME</th>
                            <th>MATRICOLA</th>
                            <th>EMAIL</th>
                            <th>AZIONI</th>
                        </tr>
                    </thead>
                    <Tbody>
                        @foreach ($studenti as $studente)
                            <tr>
                                <td>{{ $studente->id }}</td>
                                <td>{{ $studente->name }}</td>
                                <td>{{ $studente->lastname }}</td>
                                <td>{{ $studente->serial }}</td>
                                <td>{{ $studente->email }}</td>
                                <td>
                                <a class="btn btn-outline-info"
                                href="{{ route('students.show', ['student' => $studente->id]) }}">
                                    Dettagli
                                </a>
                                </td>
                            </tr>
                        @endforeach
                    </Tbody>

                </table>
            </div>
        </div>
    </div>

@endsection
