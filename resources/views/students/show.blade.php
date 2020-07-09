@extends('layouts.app')

@section('page_title', 'Dettaglio Studente')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-4 mb-4">Dettaglio Studente</h1>
                <ul>
                    <li class="mb-3">ID: <strong> {{ $studente->id }} </strong></li>
                    <li class="mb-3">Nome: <strong> {{ $studente->name }} </strong></li>
                    <li class="mb-3">Cognome:<strong> {{ $studente->lastname }} </strong></li>
                    <li class="mb-3">Matricola:<strong> {{ $studente->serial }} </strong></li>
                    <li class="mb-3">Email:<strong> {{ $studente->email }} </strong></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
