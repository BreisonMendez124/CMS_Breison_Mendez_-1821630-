<section class="container">
    <h1>Crear usuario</h1>
    <form action="?controller=usua&method=update" method="POST">
        <section class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" name="Nombre" id="Nombre" required class="form-control" value="<?= $user->Nombre?>">
        </section>
        <section class="form-group">
            <label for="Apellidos">Apellidos</label>
            <input type="Apellidos" name="Apellidos" id="Apellidos" required class="form-control" value="<?= $user->Apellidos ?>">
        </section>
        <section class="form-group">
            <label for="Correo">Correo</label>
            <input type="Correo" name="Correo" id="Correo" required class="form-control" value="<?= $user->Correo ?>">
        </section>
        <section class="form-group">
            <input type="submit" value="Actualizar" class="btn btn-green">
        </section>
    </form>
</section>