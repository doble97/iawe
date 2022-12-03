<!DOCTYPE html>
<html lang="es">

<head>

  <link href="bootstrap.min.css" rel="stylesheet" type="text/css">

  <style>
    body {
      background-color: #bbd9ef;
    }

    #navbar {
      background-color: #0f4770;
      width: auto;
      height: fit-content;
      margin-top: 0px;
      color: white;
      min-height: 80px;
    }

    #container {
      background-color: #0f4770;

      color: white;
      min-width: 30em;
      max-width: 60em;
      height: 25em;
      margin-top: 50px;
      margin-right: auto;
      margin-left: auto;
      padding: 20px;
    }


    .fgdimensiones {
      text-align: unset;
    }

    #dimen_cm {
      text-align: center;
      margin-right: 0px;
      width: 30px;
    }

    input[type=submit] {
      margin-top: 20px;
    }

    .fgdimensiones {
      margin-top: 10px;
    }
  </style>

</head>

<body>


  <!-- bg-dark-->
  <?php
    session_start();
    $tema_defecto="navbar navbar-expand-lg navbar-dark bg-primary";
    if(isset($_SESSION["tema"])){
      $tema_defecto = $_SESSION["tema"];
      $_SESSION["tema"] = $tema_defecto;
    }
    if(isset($_GET["clasico"])){
      $tema_defecto="navbar navbar-expand-lg navbar-dark bg-primary";
    }
    if(isset($_GET["oscuro"])){
      $tema_defecto="navbar navbar-expand-lg navbar-dark bg-dark";
    }
    $_SESSION["tema"] = $tema_defecto;
    echo "<nav class='$tema_defecto'> ";

  ?>
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> -->
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">AsirPack</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
        aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button >
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" href="login.php">Login
              <span class="visually-hidden">(current)</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="procesar_login.php">Cerrar sesion
              <span class="visually-hidden">(current)</span>
            </a>
          </li>
        </ul>
      </div>
      <form action="index.php" method="GET">
        <button type="submit" class="btn btn-light" name="clasico"
          <?php
            if($tema_defecto=="navbar navbar-expand-lg navbar-dark bg-primary"){
              echo "hidden";
            }
          ?>
        >Clasico</button>
        <button type="submit" class="btn btn-dark" name="oscuro"
            <?php
              if("navbar navbar-expand-lg navbar-dark bg-dark"==$tema_defecto){
                echo "hidden";
              }
            ?>
        >Oscuro</button>
      </form>
    </div>
  </nav>


  <div id="container">
    <form action="presupuesto.php" method="GET">
      <div class="form-group">
        <label for="exampleSelect1" class="form-label mt-4">Seleccione tiempo de envío:</label>
        <select class="form-select" id="exampleSelect1" name="fecha_entrega">
          <!-- <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option> -->
          <?php
            include 'datos.php';
            foreach($tiempo_envio as $clave=>$valor){
              echo "<option value='$valor' >$clave</option>";
            }
          ?>
        </select>
      </div>
      <div class="row fgdimensiones">


        <div class="col-sm-4">
          <div class=" input-group">
            <input type="number" lass="form-control" id="dimen_ancho" name="dimen_ancho"
              placeholder="ancho" required>
            <div class="input-group-append">
              <span class="input-group-text">cm</span>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class=" input-group">
            <input type="number" id="dimen_profundo" name="dimen_alto" placeholder="alto" required>
            <div class="input-group-append">
              <span class="input-group-text">cm</span>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class=" input-group">
            <input type="number" id="dimen_profundo" name="dimen_profundidad" placeholder="profundidad" required>
            <div class="input-group-append">
              <span class="input-group-text">cm</span>
            </div>
          </div>
        </div>

      </div>
      <div class="form-group">
        <label for="inputPeso" class="form-label mt-4">Peso: </label>
        <input type="decimal" class="form-control" id="inputPeso" aria-describedby="Peso"
          placeholder="Peso en kilogramaos" required name="peso">
      </div>
      <br>
      <br>
      <center><button type="submit" class="btn btn-primary">Calcular presupuesto</button></center>

    </form>
  </div>

  </div>
</body>

</html>