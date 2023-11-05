<?php include("../includes/header.php") ?>

<div class="row">
          
    </div>

<div class="row">
        <div class="col-sm-6">
            <h3>Editar Comentario</h3>
        </div>            
    </div>
    <div class="row">
        <div class="col-sm-6 offset-3">
        <form method="POST" action=""> 

            <input type="hidden" name="id" value="4">

            <div class="mb-3">
                <label for="texto">Texto</label>   
                <textarea class="form-control" placeholder="Escriba el texto de su artículo" name="texto" style="height: 200px" readonly>
                texto descripcion demo
                </textarea>              
            </div>               

            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario:</label>
                <input type="text" class="form-control" value="juan@gmail.com" readonly>               
            </div>

            <div class="mb-3">
                <label for="cambiarEstado" class="form-label">Cambiar estado:</label>
                <select class="form-select" name="cambiarEstado" aria-label="Default select example">
                <option value="">--Seleccionar una opción--</option>
                <option value="1">Aprobado</option>
                <option value="0">No Aprobado</option>              
                </select>                 
            </div>  

            <br />
            <button type="submit" name="editarComentario" class="btn btn-success float-left"><i class="bi bi-person-bounding-box"></i> Editar Comentario</button>

            <button type="submit" name="borrarComentario" class="btn btn-danger float-right"><i class="bi bi-person-bounding-box"></i> Borrar Comentario</button>
            </form>
        </div>
    </div>
<?php include("../includes/footer.php") ?>
       