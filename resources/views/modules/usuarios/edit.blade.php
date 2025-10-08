@extends('layouts.main')
<form action="{{ route("usuario.update", $item->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Nombre del usuario</label>
    <input type="text" class="form-control" required name="name" id="name" value="{{ $item->name }}">
    <label for="email">Email</label>
    <input type="text" name="email" id="email" class="form-control" required value="{{ $item->email }}">
    <label for="rol">Rol de usuario</label>
    <select name="rol" id="rol" class="form-select">
      <option value="">Selecciona el rol</option>
      @if ($item->rol == 'admin')
        <option value="admin" selected>Admin</option>
        <option value="cajero">Cajero</option>
      @else
        <option value="admin">Admin</option>
        <option value="cajero" selected>Cajero</option>
      @endif
    </select>
    <button class="btn btn-warning mt-3">Actualizar</button>
    <a href="{{ route("usuario") }}" class="btn btn-info mt-3">
        Cancelar
    </a>
</form>