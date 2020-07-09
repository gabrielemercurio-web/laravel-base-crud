@extends('layouts.app')

@section('page_title', 'Creazione Studente')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-4 mb-4">Creazione nuovo studente</h1>
                <form action="{{ route('students.store')}}" method="post">

                    @csrf

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="name" class="form-control" id="nome" placeholder="Nome...">
                    </div>
                    <div class="form-group">
                        <label for="cognome">Cognome</label>
                        <input type="text" name="lastname" class="form-control" id="cognome" placeholder="Cognome...">
                    </div>
                    <div class="form-group">
                        <label for="matricola">Matricola</label>
                        <input type="text" name="serial" class="form-control" id="matricola" placeholder="Matricola...">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="E-mail...">
                    </div>
                    <button type="submit" class="btn btn-primary"> Salva </button>
                </form>
            </div>
        </div>
    </div>
@endsection
