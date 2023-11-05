<?php include("../includes/header.php") ?>

<?php 
    // Instanciar la conexion de la base de datos
    $baseDatos = new Basemysql();
    $db = $baseDatos->connect();

    // validar si se envío el id
    if(isset($_GET['id'])){ // si existe el valor de id
        $id = $_GET['id'];
    }

    // instanciamos el objeto
    $articulos = new Articulo($db);
    $resultado = $articulos->leer_individual($id);
?>

<div class="row">
       
</div>

<div class="row my-2 py-2 justify-content-center mx-auto" >
        <div class="col-sm-6">
            <h3 class="d-flex ">Editar Artículo</h3>
        </div>            
    </div>
    <div class="row ">
        <div class="col-sm-6 offset-3 pt-3 ">
        <form method="POST" action="" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?php echo $resultado->id ?>">

            <div class="mb-3">
                <label for="titulo" class="form-label"> Titulo </label>
                <input type="text" class="form-control" name="titulo" id="titulo" value="<?php echo $resultado->titulo ?>">               
            </div>

            <div class="mb-3">
                <img class="img-fluid img-thumbnail" src="<?php echo RUTA_FRONT . "img/articulos/" . $resultado->imagen ?> ">
            </div>

            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen:</label>
                <input type="file" class="form-control" name="imagen" id="imagen" placeholder="Selecciona una imagen">               
            </div>
            <div class="mb-3">
                <label for="texto">Texto</label>   
                <textarea class="form-control" placeholder="Escriba el texto de su artículo" name="texto" style="height: 200px">
               <?php  echo $resultado->texto ?>
                </textarea>              
            </div>          
        
            <br />
            <button type="submit" name="editarArticulo" class="btn btn-success float-left"><i class="bi bi-person-bounding-box"></i> Editar Artículo</button>

            <button type="submit" name="borrarArticulo" class="btn btn-danger float-right"><i class="bi bi-person-bounding-box"></i> Borrar Artículo</button>
            </form>
        </div>
    </div>
<?php include("../includes/footer.php") ?>