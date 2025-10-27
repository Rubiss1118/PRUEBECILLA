@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Usuario</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $user->name }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
            <p class="card-text"><strong>Creado:</strong> {{ $user->created_at }}</p>
            <p class="card-text"><strong>Actualizado:</strong> {{ $user->updated_at }}</p>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Editar</a>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Volver</a>
        
        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
        </form>
    </div>
</div>
@endsection