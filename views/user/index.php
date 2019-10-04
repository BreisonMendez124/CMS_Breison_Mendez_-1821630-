<h1>Lista </h1>

<a href="?controller=user&method=create">
    <button class="btn btn-green">Crear</button>
</a>
<table class="table">
    <thead>
        <th>Identificacion</th>
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>Fecha</th>
        <th>Imagen</th>
        <th>Opciones</th>
    </thead>
    <tbody>
    <?php foreach(parent::all() as $user):  ?>
        <tr>
            <td><?= $user->Id_public ?></td>
            <td><?= $user->Titulo ?></td>
            <td><?= $user->Descripcion ?></td>
            <td><?= $user->Fecha ?></td>
            <td><?= $user->Nombre ?></td>
            
            <td>
            <img class="Imagen" src="<?=$user->Imagen?>" alt="">
            </td>
            <td width="200" class="table__options">
                <a href="?controller=user&method=edit&Id_public=<?= $user->Id_public ?>">
                    <button class="btn btn-outline-green">Editar</button>
                </a>
                <a href="?controller=user&method=deletes&Id_public=<?= $user->Id_public?>">
                <button class="btn btn-outline-red">Borrar</button>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

