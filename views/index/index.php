<div class="Imagen-contenedor">
    <?php foreach(parent::all() as $user):  ?>
 
                 <td>
            <img class="Imagen" src="<?=$user->Imagen?>" alt="">
            </td>

        <h2 class="Nombre"><?= $user->Nombre?></h2></div>
        <h2 class="Nombre"><?= $user->Titulo?></h2></div>
        <h2 class="Nombre"><?= $user->Descripcion?></h2></div>
            
        
    <?php endforeach; ?>

    </div>
    

