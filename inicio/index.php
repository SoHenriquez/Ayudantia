
    <!-- head -->
        <?php include('../partes/head.php') ?>
    <!-- fin head -->

    <?php include('../conexion/conexion.php')?>
    <?php include('../conexion/buscador.php')?>
<body>
    <div class="d-flex" id="content-wrapper">
    <!-- sideBar -->
    <?php include('../partes/sidebar.php') ?>
    <!-- fin sideBar -->

        <div class="w-100">

    <!-- Navbar -->
        <?php include('../partes/nav.php') ?>
    <!-- Fin Navbar -->

        <!-- Page Content -->
        <div id="content" class="bg-grey w-100">
            <section class="bg-light ">
            <h1 style="text-align: center;">Tarea</h1>
            <div class="container">
            <div class="row">
                
                    <div class="col-6">
                    <p>Deben realizar la conexión con la base de datos de xampp (phpmyadmin).</p>
                    </div>
                    <div class="col-5">
                        <p>Deben crear la base de datos con el nombre "ayudantía" y cargar el código sql que está en la misma carpeta.</p>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-6">
                    <p>Crearán una tabla que contenga el id y url de cada una de las imágenes, ordenada por id y abajo de la tabla deberán mostrar una imagen, esta imagen cambiará dependiendo del id que se le entregue a la consulta sql mediante una variable.</p>
                    </div>
                    <div class="col-5">
                    <p>El código resultante deberan subirlo a gitlab o github y deberan enviarlo por correo a mi con copia a la profesora.</p>
                    </div>
                </div>
            </div>
                
            </section>
            <div class="container">
            <table class="table table-striped ">
                <tr class="bg-primary" style="color:white">
                    <td>ID</td>
                    <td>url</td>
                </tr>
                <?php ?>
                <tr>
                    
                    <td><?php echo $idImagen?> </td>
                    <td><?php echo $Imagen?> </td>
                </tr>
            
            </table>
            <form action="index.php" method="GET">
                <div class="row">
                    <div class="form-control col-4">
                        <label for="">Indique por ID la imagen</label>
                        
                    </div>
                    <div class="col-4">
                        <input type="number" min="1" max="10" placeholder="id" name="valor" require>
                        <input type="submit" value="ver">
                    </div>
                </div>
                
                
            </form>
            
           <?php  if(isset($_POST['sumbit']) && !empty($_POST['sumbit']) && $_POST['valor']){

                $idImagen = $_POST['valor'];
                $Consultasql = "SELECT url FROM imagenes WHERE id = $idImagen";
                $consulta = mysqli_query($con,$Consultasql);
                $dato = $consulta->fetch_assoc();
                $Imagen = $dato["url"];
                
                echo"<img src".$Imagen." alt='algun gato'>";

           } ?>
            
            </div>
            





        </div>
        </div>
    </div>

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>    
</body>

