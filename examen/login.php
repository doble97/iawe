<!DOCTYPE html>
<html lang="es">
<?php
  session_start();
  if(isset($_SESSION["logueado"])){
    header("Location: index.php");
  }
  if(isset($_POST["usuario"]) and isset($_POST["password"])){
    if($_POST["usuario"]=="usuario" and $_POST["password"]=="password" ){
      $_SESSION["logueado"]=true;
      header("Location: index.php");
    }else{
      header("Location: login.php?error=true");
    }
  }
?>
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
      /* text-align: center; */
    }


    .fgdimensiones {
      text-align: unset;
      /*display: inline-block; */
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

<?php
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
  <!-- bg-dark-->
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary"> -->
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">AsirPack</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
        aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
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
      <form action="login.php" method="GET">
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
    <form action="login.php" method="POST">
      <center>
        <h2>Login</h2>
      </center>
      <div class="form-group">
        <label for="inputUsuario" class="form-label mt-4">Email address</label>
        <input type="text" class="form-control" id="inputUsuario" placeholder="Usuario" name="usuario" required>
      </div>
      <div class="form-group">
        <label for="inputPassword" class="form-label mt-4">Email address</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Constraseña" name="password" required>
      </div>
      <br><br>
      <center><button type="submit" class="btn btn-primary">Login</button></center>

    </form>
  </div>
  </div>

</body>

</html>