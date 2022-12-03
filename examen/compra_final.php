<!DOCTYPE html>
<html lang="es">
<?php
    session_start();
    if(isset($_POST["inputNombre"]) and isset($_POST["inputApellido"]) and isset($_POST["inputDireccion"])){
        $_SESSION["nombre"]=$_POST["inputNombre"];
        $_SESSION["apellido"]=$_POST["inputApellido"];
        $_SESSION["direccion"]=$_POST["inputDireccion"];
    }
    if(!isset($_SESSION["logueado"])){
        header("Location: login.php");
    }
    if(isset($_POST["inputNombre"]) and isset($_POST["inputApellido"]) and isset($_POST["inputDireccion"])){
        $_SESSION["nombre"]=$_POST["inputNombre"];
        $_SESSION["apellido"]=$_POST["inputApellido"];
        $_SESSION["direccion"]=$_POST["inputDireccion"];
    }else{
        header("Location: presupuesto.php");
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
            width: 50em;
            margin-top: 50px;
            margin-right: auto;
            margin-left: auto;
            padding: 20px;
            /* text-align: center; */
            border-radius: 15px;
        }


        .fgdimensiones {
            text-align: unset;
            display: inline-block;
        }

        #dimen_cm {
            text-align: center;
            margin-right: 0px;
            width: 30px;
        }

        input[type=submit] {
            margin-top: 20px;
        }

        #dimen_largo,
        #dimen_ancho,
        #dimen_profundo,
        #dimen_cm {
            display: inline-block;
            float: left;

        }

        #dimen_largo,
        #dimen_ancho,
        #dimen_profundo {
            width: 8em;
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
            <form action="compra_final.php" method="GET">
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
        <center>
            <h2> Compra finalizada</h2>
        </center>
        <span> Nombre: 
            <?php
                echo $_SESSION["nombre"];
            ?>
        </span><br>
        <span> Apellidos: 
            <?php
                echo $_SESSION["apellido"];
            ?>
        </span><br>
        <span> Direcciones: 
        <?php
                echo $_SESSION["direccion"];
            ?>
        </span><br>
        <span> Datos del paquete:
        </span><br>
        <span> Ancho:             <?php
                echo $_SESSION["ancho"];
            ?></span>
        <span> Alto:             <?php
                echo $_SESSION["alto"];
            ?></span>
            <span> Profundidad:            
                <?php
                echo $_SESSION["profundidad"];
            ?>
            </span><br>
        <span> Peso: 
            <?php
                echo $_SESSION["peso"];
            ?>
        </span><br>
        <span> Fecha de entrega: 
            <?php
                echo $_POST["optionsRadios"];
            ?>
        </span><br>

    </div>

</body>

</html>