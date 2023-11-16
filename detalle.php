<?php include("includes/header_front.php") ?>

    <div class="row">
       
    </div>

    <div class="container-fluid"> 
      
        <div class="row">
                
        <div class="row">
        <div class="col-sm-12">
            
        </div>  
    </div>

            <div class="col-sm-12">
                <div class="card">
                   <div class="card-header">
                        <h1>Título</h1>
                   </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img class="img-fluid img-thumbnail" src="img/articulos/img1.jpg">
                        </div>

                        <p>texto prueba</p>

                    </div>
                </div>
            </div>
        </div>  
  
        
        <div class="row">        

        <div class="col-sm-6 offset-3">
        <form method="POST" action="">
            <input type="hidden" name="articulo" value="">
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario:</label>
                <input type="text" class="form-control" name="usuario" id="usuario" value="juangarcia@gmail.com" readonly>               
            </div>
           
            <div class="mb-3">
                <label for="comentario">Comentario</label>   
                <textarea class="form-control" name="comentario" style="height: 200px"></textarea>              
            </div>          
        
            <br />
            <button type="submit" name="enviarComentario" class="btn btn-primary w-100"><i class="bi bi-person-bounding-box"></i> Crear Nuevo Comentario</button>
            </form>
        </div>
        </div>
   
    </div>

    <div class="row">
    <h3 class="text-center mt-5">Comentarios</h3>
      
            <h4><i class="bi bi-person-circle"></i> juangarcia@gmail.com</h4>
            <p>texto comentario demo</p>
      
    </div>
         
    </div>
<?php include("includes/footer.php") ?>
       