<section class="container">
    <h1>Crear Usuariooos</h1>
    <form action="?controller=Usua&method=store" method="POST">
        <section class="form-group">
            <label for="Identificacion">Identificacion</label>
            <input type="text" name="Identificacion" id="Identificacion" required class="form-control">
        </section>
        <section class="form-group">
            <label for="Nombres">Nombres</label>
            <input type="Nombres" name="Nombre" id="Nombre" required class="form-control">
        </section>
        <section class="form-group">
            <label for="Apellidos">Apellidos</label>
            <input type="text" name="Apellido" id="Apellido" required class="form-control">
        </section>
        <section class="form-group">
            <label for="Correo">Correo</label>
            <input type="text" name="Correo" id="Correo" required class="form-control">
        </section>
        <section class="form-group">
            <label for="Password">Contraseña</label>
            <input type="Password" name="Password" id="Password" required class="form-control">
        </section>

        <select style="display:none;" name="id_role" id="id_role">
            <option value="1">Usuario</option>
        </select>
        <section class="form-group">
            <input type="submit" value="Registar" class="btn btn-green">
        </section>
    </form>
</section>