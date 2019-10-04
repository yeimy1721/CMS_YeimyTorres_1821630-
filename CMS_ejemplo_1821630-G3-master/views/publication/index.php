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


            </td>



        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

