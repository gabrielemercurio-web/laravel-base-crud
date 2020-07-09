@extends('layouts.app')

@section('page_title', 'Tutti gli Studenti')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-4 mb-4">Lista di tutti gli studenti</h1>
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
                                <a class="btn btn-info"
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
