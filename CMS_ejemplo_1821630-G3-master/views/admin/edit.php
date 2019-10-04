<style>

    body{
        background: linear-gradient(90deg, #201f27, #03707b);
        padding: 20px;
    }

    .contenedor1{

        margin-left: 60vh;
        margin-right: 60vh;
        margin-bottom: -1vh;
        padding: 10px;
        background-color: white;
    }

    .contenedor2{
        padding: 10px;
        background-color: white;
    }

    .contenedor3{
        padding: 10px;
    }

    label{
        display: block;
        margin-top: 30px;
        font-size: 20px;
        font-weight: 300;
        color: #7a7a7a
    }

    input{
        width: 100%; height: 30px;
        background: rgba(130, 123, 123, 0.24);
        border: 1px;
        outline: 3px;
        border-bottom: 2px solid rgba(11, 183, 234, 0.95);
        color: #E30F87;
        font-size: 17px;
    }

    .button{
        width: 100%;
        height: 50px;
        margin-top: 30px;
        color: white;
        border: 0px;
        background: linear-gradient(90deg, #BF4222, #E30F87);
        font-weight: 300;
        cursor: pointer;
        font-size: 18px;

    }

    .button[type="submit"]:hover {
        background: linear-gradient(90deg, #E30F87, #BF4222);
    }

    span{
        display: block;
        margin-top: 30px;
        text-align: center;
        color: #7a7a7a;
        font-weight: 300;
        margin-bottom: -3vh;
    }

    a{
        text-decoration: none;
    }

    .file{
        font-size: 14px;
        width: -100%;
    }
    h1  {
        color: white;
        margin-top: -4vh;
        margin-left: 65vh;
    }
</style>

<h1>Editar Publicacion</h1>

<div class="contenedor1">
    <div class="contenedor2">
        <div class="contenedor3">

<form action="?controller=publication&method=update" method="POST">
    <input type="hidden" name="id" value="<?= $user->id ?>">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" autofocus required value="<?= $user->title ?>">
    <br>
    <label for="description">Desciption</label>
    <input class="area" type="text" name="description" id="description" required value="<?= $user->description ?>">
    <br>
    <label for="url_image">Url image</label>
    <input class="file" type="file" name="url_image" id="url_image" required value="<?= $user->url_image ?>">
    <br>
    
    <input class="button" type="submit" value="Update">
</form>

        </div>
    </div>
</div>