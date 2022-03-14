<?php
  $bbdd = 'alumnos2021';
  include 'conexion.php';

  // *Traer los datos de la base
  $mostrar = 'SELECT * FROM registro';
  $consultas = mysqli_query($conexion,$mostrar);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Listado</title>
  </head>
  <body data-spy="scroll" data-target="#navbar" data-offset="57">
    <!-- Header -->
    <nav id="header" class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">
         
          Conf Bs As
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#main">La conferencia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="listado.php">Listado</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#place-time">El lugar y la fecha</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registro.html">Registrarse</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-codo" href="#" data-toggle="modal" data-target="#modalCompra">Comprar tickets</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- /Header -->

    <!-- Main -->
    <main id="main">
     
    </main>
    <!-- /Main -->

    <!-- Speakers -->
    
    <!-- /Speakers -->

    

    <!-- Conviértete en orador -->
    <section id="conviertete-en-orador" class="pt-3 pb-3">
      <div class="container">

        <!--Categorias-->
        <div class="row">
          <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-2">
        
            
            

         
          </div>
        </div>
        <!--#paquetes-->

        <!--Categorias-->

        <div class="row">
          <div class="col text-uppercase text-center">
          
            <h2>Listado usuarios registrados</h2>
          </div>
        </div>
        <div class="row">
          
        </div>
        <div class="row">
          <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-2">
            
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">DNI</th>
                  <th scope="col">Telefono</th>
                  <th scope="col">Correo electrónico</th>
                  <th scope="col">Actualizar</th>
                  <th scope="col">Eliminar</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  while ($tabla = mysqli_fetch_array($consultas)){?>
                  <tr>
                    <td><?php echo $tabla['id'];?></td>
                    <td><?php echo $tabla['nombre'];?></td>
                    <td><?php echo $tabla['apellido'];?></td>
                    <td><?php echo $tabla['dni'];?></td>
                    <td><?php echo $tabla['telefono'];?></td>
                    <td><?php echo $tabla['correo'];?></td>
                    <td><a href="clase39.php?id=<?php echo $tabla['id'];?>">Actualizar</a></td>
                    <td><a href="eliminar.php?id=<?php echo $tabla['id'];?>">Eliminar</a></td>
                  </tr>
                 <?php } ?>
              </tbody>
            </table>


          </div>
        </div>
      </div>
    </section>
    <!-- /Conviértete en orador -->

    <!-- Footer -->
    <footer id="footer" class="pb-4 pt-4">
      <div class="container">
        <div class="row text-center">
          <div class="col-12 col-lg">
            <a href="#">Preguntas frecuentes</a>
          </div>
          <div class="col-12 col-lg">
            <a href="#">Contáctanos</a>
          </div>
          <div class="col-12 col-lg">
            <a href="#">Prensa</a>
          </div>
          <div class="col-12 col-lg">
            <a href="#">Conferencias</a>
          </div>
          <div class="col-12 col-lg">
            <a href="#">Términos y condiciones</a>
          </div>
          <div class="col-12 col-lg">
            <a href="#">Privacidad</a>
          </div>
          <div class="col-12 col-lg">
            <a href="#">Estudiantes</a>
          </div>
        </div>
      </div>
    </footer>
    <!-- /Footer -->

    <!-- Modal -->
    <div class="modal fade" id="modalCompra" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Comprar tickets</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-row">
                <div class="form-group col">
                  <label for="inputEmail4">Nombre</label>
                  <input type="text" class="form-control" id="inputEmail4" name="nombre">
                  <label for="inputEmail4">Apellido</label>
                  <input type="text" class="form-control" id="inputEmail4">
                  <label for="inputEmail4">Cantidad Tikets</label>
                  <input type="number" class="form-control" id="inputEmail4">
                  <div class="form-group">
                    <select id="pais" class="form-control">
                      <option>Argentina</option>
                      <option>Brasil</option>
                      <option>Bolivia</option>
                      <option>Chile</option>
                      <option>Paraguay</option>
                      <option>Uruguay</option>
                    </select>
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">@</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                </div>
              </div>
            </form>
            <div class="alert alert-warning" role="alert">
              Recibirás un correo de confirmación
            </div>
            <div id="totalResumen">
              <p>Resumen</p>

            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-platzi">Resumen</button>
         
          </div>
        </div>
      </div>
    </div>
    <!-- /Modal -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>
