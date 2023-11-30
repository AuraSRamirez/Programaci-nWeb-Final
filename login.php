<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Santiago Ramirez Aura Patricia</title>
</head>

<body>
    <div>
    <h1 class="cent">☆｡*ﾟ⁠+ Proyecto Final +｡*ﾟ☆⁠</h1>

    </div>
        <h2 class="cent">Iniciar Sesión</h2>

     <form action="ses.php" method="post">

        <?php if (isset($_GET['error'])) { ?>

            <p><?php echo $_GET['error']; ?></p>

        <?php } ?>

     <div class="cent">
          <form action="crear.php" method="POST">
            <table class="tabs">
              <thead>
                <th>
                  <h2 class="cent">Iniciar Sesión</h2>
                </th>
              </thead>

              <tbody>
                    <tr>
                        <td><label for="nombre_usuario">Nombre de Usuario</label></td>
                    </tr>
                    <tr>
                        <td><input class="entr" type="text" name="usuario" required placeholder="Ingresa tu Usuario"></td>
                    </tr>
                        

                    <tr>
                        <td><label for="password">Contraseña</label></td>
                    </tr>
                    <tr>
                        <td><input class="entr" type="password" name="pass" required placeholder="Ingresa tu Contraseña"></td>
                    </tr>
                    <tr>
                        <td><button class="botns" type="submit">Iniciar Sesion</button> <button class="botns" type="reset" value="Reset">Reiniciar Campos</button></td>
                    </tr>
                  </tbody>
                </table>
              </tbody>
            </table>
          </form>
    </div>
    <br>
    <br>
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