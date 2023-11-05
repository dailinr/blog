<?php include("../includes/header.php") ?>

<?php 
// instanciar la bd y la conexion
$baseDatos = new Basemysql();
$db = $baseDatos->connect(); // este metodo nos devuelve una conexion a la bd ( un objecto de tipo PDO)

// instanciamos el objeto
$articulo = new Articulo($db); // el metodo es porque se llama al constructor de la clase
$resultado = $articulo->leer(); // me retorna la consulta 

// var_dump($resultado); // probamos si nos está devolviendo la info de la tabla correctamente

// el array que nos devuelve la consulta lo recorremos con un for para luego mostrarlo en el <tbody>



?>

<div class="row">
    <div class="col-sm-6">
        <h3>Lista de Artículos</h3>
    </div>
    <div class="col-sm-4 offset-2">
        <a href="crear_articulo.php" class="btn btn-success w-100"><i class="bi bi-plus-circle-fill"></i> Nuevo
            Artículo</a>
    </div>
</div>
<div class="row mt-2 caja">
    <div class="col-sm-12">
        <table id="tblArticulos" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Texto</th>
                    <th>Fecha de creación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($resultado as $articulo) : ?>

                <tr>
                    <td> <?php echo $articulo->id ?> </td>
                    <td> <?php echo $articulo->titulo ?> </td>
                    <td>
                        <img class="img-fluid " src="<?php echo RUTA_FRONT . "img/articulos/" . $resultado->imagen ?> "
                        style="width:100px; height:100px">
                    </td>
                    <td> <?php echo $articulo->texto ?> </td>
                    <td> <?php echo $articulo->fecha_creacion ?> </td>
                    <td>
                        <a href="editar_articulo.php?id= <?php echo $articulo->id ?> " class="btn btn-warning"><i class="bi bi-pencil-fill"></i></a>
                    </td>
                </tr>
                
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php include("../includes/footer.php") ?>

<script>
$(document).ready(function() {
    $('#tblArticulos').DataTable();
});
</script>