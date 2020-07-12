@extends('layouts.app')

@section('page_title', 'Modifica Studente')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-4 mb-4">Modifica dati studente</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <h3>Errors:</h3>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('students.update', ['student' => $studente->id]) }}" method="post">

                    @method('PUT')
                    @csrf

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="name" class="form-control" id="nome" value="{{ old('name', $studente->name) }}" placeholder="Inserisci nome studente..." required>
                        @error('name')
                            <small class="alert-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cognome">Cognome</label>
                        <input type="text" name="lastname" class="form-control" id="cognome" value="{{ old('lastname', $studente->lastname) }}" placeholder="Inserisci cognome studente..." required>
                        @error('lastname')
                            <small class="alert-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="matricola">Matricola</label>
                        <input type="text" name="serial" class="form-control" id="matricola" value="{{ old('serial', $studente->serial) }}" placeholder="Inserisci matricola studente..." required>
                        @error('serial')
                            <small class="alert-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{ old('email', $studente->email) }}" placeholder="Inserisci email studente..." required>
                        @error('email')
                            <small class="alert-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary"> Salva </button>
                    <a class="btn btn-outline-secondary" href="{{ route('students.index') }}"> Annulla </a>
                </form>
            </div>
        </div>
    </div>
@endsection
