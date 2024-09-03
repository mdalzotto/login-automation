@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ isset($user) ? 'Editar Usuário' : 'Criar Usuário' }}</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ isset($user) ? route('users.update', $user->id) : route('users.store') }}" method="POST">
            @csrf
            @if (isset($user))
                @method('PUT')
            @endif

            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name ?? '') }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email ?? '') }}" required>
            </div>

            <div class="mb-3">
                <div class="form-group">
                    <label for="role">Role</label>
                    <select name="role" class="form-control" required>
                        @foreach($roles as $key => $value)
                            <option value="{{ $key }}" {{ isset($user) && old('role', $user->role) == $key ? 'selected' : '' }}>{{ $value }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            @if (!isset($user))
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" {{ isset($user) ? '' : 'required' }}>
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirme a Senha</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" {{ isset($user) ? '' : 'required' }}>
                </div>
            @endif

            <button type="submit" class="btn btn-success">{{ isset($user) ? 'Atualizar' : 'Salvar' }}</button>
            <a href="{{ route('users.index') }}" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
@endsection
