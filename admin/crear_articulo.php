<?php include("../includes/header.php") ?>

<?php 

    // instanciamos la conexion a la base datos
    $baseDatos = new Basemysql();
    $db = $baseDatos->connect();

    if(isset($_POST['crearArticulo'])){ // si hay un POST en el boton crearArticulo
        // obtner los valores
        $titulo = $_POST["titulo"]; // lo que está en el name del input
        $texto = $_POST["texto"];

        // validamos que la imagen no tenga algún error
        if($_FILES["imagen"]["error"] > 0){

            $error = "Error, ningún archivo seleccionado";
        }
        else{
            if(empty($titulo) || $titulo == '' || empty($texto) || $texto == ''){ // si no están vacios los valores de los parametros
                $error = "Error, algunos campos están vacíos";
            }
            else{
                // capturamos los valores (de imagen)
                $image = $_FILES['imagen']['name'];
                $imageArr = explode('.', $image); // separa una cadena de texto por el punto ---> img.jpg será array de strings
                $rand = rand(1000, 99999); // genera un numero aleatorio

                // ese numero se le dará como nuevo nombre a las imagenes para que cada una tenga un nombre unico y no haya conflito
                $newImageName = $imageArr[0] .$rand. '.'. $imageArr[1]; // concatenamos con los indices que guardan parte del nombre de la imagen
                $rutaFinal = "../img/articulos/" . $newImageName; // la ruta se concatena con el nuevo nombre de la imagen
                // para que mueva la image a la carpeta del servidor del proyecto en ruta final
                move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaFinal); // parametros: nombre temporal de image, ruta final

                $articulo = new Articulo($db);

                if($articulo->crear($titulo, $newImageName, $texto)){ // si esto es true = está correctamente configurado
                    $mensaje = "Articulo creado correctamente";
                    header("Location:articulos.php?mensaje=" .urlencode($mensaje)); // redireccion a la pagina articulos
                }

            }
        }

    }

?>

<div class="row">
    <div class="col-sm-12">
        <?php if(isset($error)) : ?> <!--  si existe la variable error (cuando se envia formulario vacio) -->
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong> <?php echo $error; ?> </strong> <!--  muestra mensaje de error -->
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" ></button>
            </div>
        <?php endif; ?>
    </div>
</div>

    <div class="row">
        <div class="col-sm-6">
            <h3>Crear un Nuevo Artículo</h3>
        </div>            
    </div>
    <div class="row">
        <div class="col-sm-6 offset-3">
        <form method="POST" action="" enctype="multipart/form-data" <!-- quiere decir que en este formulario se adjuntarán archivos -->
            <div class="mb-3">
                <label for="titulo" class="form-label">Título:</label>
                <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Ingresa el título">               
            </div>
            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen:</label>
                <input type="file" class="form-control" name="imagen" id="apellidos" placeholder="Selecciona una imagen">               
            </div>
            <div class="mb-3">
                <label for="texto">Texto</label>   
                <textarea class="form-control" placeholder="Escriba el texto de su artículo" name="texto" style="height: 200px"></textarea>              
            </div>          
        
            <br />
            <button type="submit" name="crearArticulo" class="btn btn-primary w-100"><i class="bi bi-person-bounding-box"></i> Crear Nuevo Artículo</button>
        </form>
        </div>
    </div>
<?php include("../includes/footer.php") ?>
       