<?php 
    include("conexion.php");
    $conn = $GLOBALS['con'];

    $id = isset($_GET['id']) ? $_GET['id'] : null;

    $sql = "SELECT * FROM usuarios WHERE id='$id'";
    $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
        } else {
            echo "Error: No record found for ID $id.";
            exit;
        }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <title>Santiago Ramirez Aura Patricia</title>
        
    </head>
    <body>
    <div>
        <h1 class="cent">☆｡*ﾟ⁠+ Proyecto Final +｡*ﾟ☆</h1>
    </div>

        <div class="cent">
            <form action="editar.php" method="POST">
                <table class="tabs">
                    <thead>
                        <th>
                            <h2 class="cent">Editar Usuario</h2>
                        </th>
                        <th>
                            <button class="botns" type="submit"> Guardar </button>
                            <button class="botns" type="cancel"> Cancelar </button>
                        </th>
                        <thead>
                            <th>Nombre</th>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th>Número de Teléfono</th>
                            <th>Email</th>
                            <th>Dirección</th>
                            <th>Permisos</th>
                        </thead>
                    </thead>

                    <tbody>
                        <tr>
                        <td><input class="entr" type="text" name="nombre" placeholder="Nombre" value="<?= $row['nombre']?>"></td>
                        <td><input class="entr" type="text" name="usuario" placeholder="Usuario" value="<?= $row['usuario']?>"></td>
                        <td><input class="entr" type="text" name="contra" placeholder="Contraseña" value="<?= $row['contra']?>"></td>
                        <td><input class="entr" type="number" name="tel" placeholder="Número de Teléfono" value="<?= $row['tel']?>"></td>
                        <td><input class="entr" type="email" name="email" placeholder="Email" value="<?= $row['email']?>"></td>
                        <td><input class="entr" type="text" name="direccion" placeholder="Dirección" value="<?= $row['direccion']?>"></td>
                        <td><input class="entr" type="number" name="permisos" placeholder="Nivel de Permisos" value="<?= $row['permisos']?>"></td>
                        <input type="hidden" name="id" value="<?= $row['id']?>">
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    <div class="cent">
      <table>
        <tbody>
          <tr>
            <td>
              <p class="cent">Santiago Ramirez Aura Patricia - 1510 - Programación Web 1</p>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    </body>
</html>