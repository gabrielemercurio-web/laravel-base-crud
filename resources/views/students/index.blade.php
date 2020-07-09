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
                            <th class="text-right">AZIONI</th>
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
                                <td class="text-right">
                                    <a class="btn btn-outline-info btn-sm"
                                    href="{{ route('students.show', ['student' => $studente->id]) }}">
                                        Dettagli
                                    </a>
                                    <a class="btn btn-outline-warning btn-sm" href="#">Modifica</a>
                                    <a class="btn btn-outline-danger btn-sm" href="#">Elimina</a>
                                </td>
                            </tr>
                        @endforeach
                    </Tbody>

                </table>
            </div>
        </div>
    </div>

@endsection
