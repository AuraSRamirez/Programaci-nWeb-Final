<?php
include("conexion.php");
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Santiago Ramirez Aura Patricia</title>
</head>

<body>
    <div>
        <h1 class="cent">☆｡*ﾟ⁠+ Proyecto Final +｡*ﾟ☆</h1>
    </div>
    <div class="cent">
        <a class="botns" href="cerrses.php">Cerrar Sesión</a>
    </div>
    <br><br>
    <div class="cent">
    <form action="crear.php" method="POST">
        <table class="tabs">
            <thead>
                <th>
                    <h2>Crear usuario</h2>
                </th>
                <th>
                    <input class="botns"type="submit" value="Agregar">
                </th>
                <thead>
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Número de Teléfono</th>
                        <th>Email</th>
                        <th>Dirección</th>
                    </thead>
            </thead>
            <tbody>
                <td>
                    <input class="entr" type="text" name="nombre" required placeholder>
                </td>
                <td>
                    <input class="entr" type="text" name="usuario" required placeholder>
                </td>
                <td>
                    <input class="entr" type="password" name="contra" required placeholder>
                </td>
                <td>
                    <input class="entr" type="number" name="tel" required placeholder>
                </td>
                <td>
                    <input class="entr" type="email" name="email" required placeholder>
                </td>
                <td>
                    <input class="entr" type="text" name="direccion" required placeholder>
                </td>
            </tbody>
        </table>
        </form>
    </div>

    <br><br>

    <div class="cent">
        <table class="tabs">
            <thead>
                <th>
                    <h2 class="cent">Usuarios registrados</h2>
                </th>
            </thead>
            <tbody>
                <tr style="font-weight: bold;">
                    <td>Nombre</td>
                    <td>Usuario</td>
                    <td>Contraseña</td>
                    <td>Teléfono</td>
                    <td>Email</td>
                    <td>Direccion</td>
                    <td>Fecha de Registdo</td>
                    <td>Permisos</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <?php
                        $sql = "select * from usuarios";
                        $result = $con->query($sql);
                        while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                            echo "<td>" . $row['nombre'] . "</td>";
                            echo "<td>" . $row['usuario'] . "</td>";
                            echo "<td>" . $row['contra'] . "</td>";
                            echo "<td>" . $row['tel'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['direccion'] . "</td>";
                            echo "<td>" . $row['registro'] . "</td>";
                            echo "<td>" . $row['permisos'] . "</td>";
                            echo '<td><a href="act.php?id=' . $row['id'] . '" role="button" class="botns" style="text-decoration: none; font-weight: bold; font-size: 0.8em;">Actualizar</a></td>';
                            echo '<td><a href="elim.php?id=' . $row['id'] . '" role="button" class="botns"  style="text-decoration: none; font-weight: bold; font-size: 0.8em;">Eliminar</a></td>';
                            }
                        echo "</tr>";

                        $con->close();
                    ?>
                </tr>
            </tbody>
        </table>
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