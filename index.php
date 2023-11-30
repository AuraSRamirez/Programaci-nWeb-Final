<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Santiago Ramirez Aura Patricia</title>
  </head>
  
  <body>
    <div>
    <h1 class="cent">☆｡*ﾟ⁠+ Proyecto Final +｡*ﾟ☆</h1>
    </div>
    
  <div class="cent">
    <div style="display:inline-flex;" style="margin: 20px;">
          <form class="tabs" action="crear.php" method="POST">
            <table>
              <thead>
                <th>
                  <h2 class="cent">Registro</h2>
                </th>
              </thead>

              <tbody>
                <tr>
                  <td>
                    <label for="nombre"> Nombre:</label> <br>
                  </td>
                </tr>

                <tr>
                  <td>
                    <input class="entr" type="text" id="nombre" required placeholder name="nombre"> <br>
                  </td>
                </tr>
                  
                <tr>
                  <td>
                    <label for="usuario"> Usuario:</label> <br>
                  </td>
                </tr>
                  
                <tr>
                  <td>
                    <input class="entr" type="text" id="usuario" required placeholder name="usuario"> <br>
                  </td>
                </tr>
                  
                <tr>
                  <td>
                    <label for="contra"> Contraseña:</label> <br>
                  </td>
                </tr>
                  
                <tr>
                  <td>
                    <input class="entr" type="text" id="contra" required placeholder name="contra"> <br>
                  </td>
                </tr>
                  
                <tr>
                  <td>
                    <label for="tel"> Número de Teléfono:</label> <br>
                  </td>
                </tr>
                  
                <tr>
                  <td>
                    <input class="entr" type="number" id="tel" required placeholder name="tel"> <br>
                  </td>
                </tr>

                <tr>
                  <td>
                    <label for="email"> Correo Electrónico:</label> <br>
                  </td>
                </tr>
                
                <tr>
                  <td>
                    <input class="entr" type="text" id="email" required placeholder name="email"> <br>
                  </td>
                </tr>

                <tr>
                  <td>
                    <label for="direccion"> Dirección</label> <br>
                  </td>
                </tr>
                  
                <tr>
                  <td>
                    <input class="entr" type="text" id="direccion" required placeholder name="direccion"> <br>
                  </td>
                </tr>
                <tr>
                  <td>
                    <br>
                    <button class="botns" style="width: 100px;"type="submit">Registrar</button> <button class="botns" type="reset" value="Reset">Reiniciar Campos</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </form>
        </div>

        <div>
          <h1 style="color: rgb(233, 198, 255);">........</h1>
        </div>

     <form action="ses.php" method="post">

        <?php if (isset($_GET['error'])) { ?>

            <p><?php echo $_GET['error']; ?></p>

        <?php } ?>

     <div>
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
                        <td><input class="entr" type="text" name="usuario" required placeholder></td>
                    </tr>
                        

                    <tr>
                        <td><label for="password">Contraseña</label></td>
                    </tr>
                    <tr>
                        <td><input class="entr" type="password" name="pass" required placeholder></td>
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
    </div>
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