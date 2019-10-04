<style>
    .imagebd{
        width:20vh;
        height: 20vh;
    }
</style>

<h1>Publicaciones</h1>

<a href="?controller=publication&method=create">Crear Publicaciones</a>


<table class="table">
    <thead>
        <th>id</th>
        <th>Titulo</th>
        <th>Description</th>
        <th>Url image</th>
        <th>Subido Por</th>
    </thead>
    <tbody>
    <?php foreach(parent::all() as $publication):  ?>
        <tr>
            <td><?= $publication->id ?></td>
            <td><?= $publication->title ?></td>
            <td><?= $publication->description ?></td>
            
            <td><a href="">
                <img src="<?= $publication->url_image ?>" alt="" class="imagebd">
            </a>
            <td><?= $publication->email ?></td>
            </td>



            <td width="200" class="table__options">
                <a href="?controller=publication&method=edit&id=<?= $publication->id ?>">
                    <button class="btn btn-outline-green">Editar</button>
                </a>
                <a href="?controller=publication&method=delete&id=<?= $publication->id ?>">
                    <button class="btn btn-outline-red">Borrar</button>
                </a>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

