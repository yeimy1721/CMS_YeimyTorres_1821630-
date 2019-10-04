<?php

class adminController extends Admin{
    //Mostrar toda la informacion
    public function index(){                
        require_once 'views/layouts/header.php';
      
        require_once 'views/admin/index.php';
        require_once 'views/layouts/footer.php';
    }

    // Mostar la vista del formulario
    public function create(){
        require_once 'views/layouts/header.php';
       
        require_once 'views/admin/create.php';
        require_once 'views/layouts/footer.php';
    }

    //'Validaciones e interaccion model
    public function store(){
        
        $url_path = 'assets/imgs' . $_FILES['url_image']['name'];
        move_uploaded_file($_FILES['url_image']['tmp_name'], $url_path);
        $_POST['url_image'] = $url_path;


        echo parent::register($_POST) ? header('location:?controller=publication') : 'Error en el registro';
    }

    //consultar y luego mostrar la informacion en el formulario
    public function edit(){
        $user = parent::find($_GET['id']);
        require_once 'views/layouts/header.php';

        require_once 'views/admin/edit.php';
        require_once 'views/layouts/footer.php';
    }

    //Validaciones e interaccion model
    public function update(){
        var_dump(parent::update_publication($_POST));
        ?>
        <script>
            alert('Publicacion Actualizada Correctamente');
            window.location.href='?controller=publication';
        </script>
        <?php
    }

    //
    public function delete(){
        var_dump(parent::delete_publication($_GET));
        ?>
        <script>
            alert('Publicacion Eliminada Correctamente');
            window.location.href='?controller=admin';
        </script>
        <?php
    }

}