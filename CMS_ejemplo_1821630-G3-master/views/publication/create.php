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
        background-color: #c3baba70;
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

    h1{
        margin-top: -4vh;
        color: white;
        margin-left: 62vh;
    }

    .saaa{
        display:none;
    }

</style>

<h1>Registro De Publicacion</h1>

<div class="contenedor1">
    <div class="contenedor2">
        <div class="contenedor3">
<form action="?controller=publication&method=store" method="POST" enctype="multipart/form-data">
    <label for="name">Title</label>
    <input type="text" name="title" id="title" required>
    <br>
    <label for="description">Description</label>
    <input type="text" name="description" id="description" required>
    <br>
    <label for="url_image">Url Image</label>
    <input class="file" type="file" name="url_image" id="url_image" required>
    <br>

    <?php foreach(parent::all() as $user) ?>
    <select class="saaa"  name="id_user" id="id_user">
    <option  value="<?=$user->id_user?>"><?=$user->email?></option>
</select>
    <input class="button" type="submit" value="Register">
</form>

        </div>
    </div>
</div>