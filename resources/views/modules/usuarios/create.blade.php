<h5>formulario</h5>
<form action="{{ route("usuario.store") }}" method="POST">
    @csrf
    <label for="name">Nombre del usuario</label>
    <input type="text" class="form-control" required name="name" id="name">
    <label for="email">Email</label>
    <input type="text" name="email" id="email" class="form-control" required>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" 
    class="form-control" required>
    <label for="rol">Rol de usuario</label>
    <select name="rol" id="rol" class="form-select">
      <option value="">Selecciona el rol</option>
      <option value="admin">Admin</option>
      <option value="cajero">Cajero</option>
    </select>
    <button class="btn btn-primary mt-3">Guardar</button>
    <a href="{{ route("usuario") }}" class="btn btn-info mt-3">
        Cancelar
    </a>
</form>