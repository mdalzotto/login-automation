@extends('layouts.app')

@section('content')
    <div class="container">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

            @if(auth()->check())
                <h3>Seja bem vindo(a) {{auth()->user()->role == 'admin'? 'Administrador ' : 'Usuário '  }} {{ auth()->user()->name }}</h3>

                @if(auth()->user()->role == 'admin')
                <br>
                <h5 class="">Acesse agora seus usuarios clicando <a href="{{ route('users.index') }}" class="btn btn-primary mb-3">aqui</a></h5>
                @endif
            @endif
    </div>
@endsection
