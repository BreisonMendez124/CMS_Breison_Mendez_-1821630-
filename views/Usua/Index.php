<h1>Lista de usuarios</h1>

<a href="?controller=usua&method=create">
    <button class="btn btn-green">Crear</button>
</a>
<table class="table">
    <thead>
        <th>Identificacion</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Correo</th>
        <th>Password</th>
        <th>Opciones</th>
    </thead>
    <tbody>
    <?php foreach(parent::all() as $user):  ?>
        <tr>
            <td><?= $user->Identificacion ?></td>
            <td><?= $user->Nombre ?></td>
            <td><?= $user->Apellido ?></td>
            <td><?= $user->Correo ?></td>
            <td width="200" class="table__options">
                <a href="?controller=usua&method=edit&Identificacion=<?= $user->Identificacion ?>">
                    <button class="btn btn-outline-green">Editar</button>
                </a>
                <a href="?controller=usua&method=deletes&Identificacion=<?= $user->Identificacion?>">
                <button class="btn btn-outline-red">Borrar</button>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

