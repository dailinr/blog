<?php include("includes/header_front.php") ?>

    <div class="container-fluid">
        <h1 class="text-center">Registro de Usuarios</h1>
        <div class="row">
            <div class="col-sm-6 offset-3">
                <div class="card">
                   <div class="card-header">
                        Regístrate para poder comentar
                   </div>
                    <div class="card-body">
                    <form method="POST" action="">

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Ingresa el nombre">               
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="Ingresa el email">               
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" name="password" placeholder="Ingresa el password">               
                    </div>

                    <div class="mb-3">
                        <label for="confirmarPassword" class="form-label">Confirmar password:</label>
                        <input type="password" class="form-control" name="confirmar_password" placeholder="Ingresa la confirmación del password">            
                    </div>                    

                    <br />
                    <button type="submit" name="registrarse" class="btn btn-primary w-100"><i class="bi bi-person-bounding-box"></i> Registrarse</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>  
         
    </div>
<?php include("includes/footer.php") ?>
       