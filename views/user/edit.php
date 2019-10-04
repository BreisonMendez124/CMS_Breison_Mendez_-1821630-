<section class="container">
    <h1>Modificar Publicaciòn</h1>
    <form action="?controller=user&method=update" method="POST">
        <section class="form-group">
            <label for="Titulo">Titulo</label>

            <input type="" name="Id_public" required class="form-control" value="<?= $_GET['Id_public']?>"s >
            <input type="text" name="Titulo" id="Titulo" required class="form-control" value="<?= $user->Titulo?>">
        </section>
        <section class="form-group">
            <label for="Descripcion">Descripcion</label>
            <input type="Descripcion" name="Descripcion" id="Descripcion" required class="form-control" value="<?= $user->Descripcion ?>">
        </section>
        <section class="form-group">
            <input type="submit" value="Actualizar" class="btn btn-green">
        </section>
    </form>
</section>