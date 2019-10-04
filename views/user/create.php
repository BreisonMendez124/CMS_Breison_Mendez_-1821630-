<section class="container">
    <h1>Crear Publicacion</h1>
    <form action="?controller=user&method=store_user" method="POST" enctype="multipart/form-data">
        <section class="form-group">
            <label for="Titulo">Titulo</label>
            <input type="text" name="Titulo" id="Titulo" required class="form-control">
        </section>
        <section class="form-group">
            <label for="Descripcion">Descripcion</label>
            <input type="Descripcion" name="Descripcion" id="Descripcion" required class="form-control">
        </section>
        <section class="form-group">
            <label for="Fecha">Fecha</label>
            <input type="date" name="Fecha" id="Fecha" required class="form-control">
        </section>
        <section class="form-group">
            <label for="Imagen">Imagen de la publicacion</label>
            <input type="file" name="Imagen" id="Imagen" required class="form-control">
        </section>

        <?php foreach(parent::all() as $user)  ?>
      <select name="Id_user" id="Id_user">
      <option value="<?=$user->Id_user?>"><?=$user->Identificacion?></option>
      </select>
      
        <section class="form-group">
            <input type="submit" value="Registar" class="btn btn-green">
        </section>
    </form>
</section>