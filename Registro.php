
<html lang="es">
  <head>
    <title>Registro</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&family=M+PLUS+Rounded+1c:wght@300&display=swap" rel="stylesheet" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style2.css" />
  </head>
  <body>
    <header>
        <nav class="navbar bg-primary" data-bs-theme="dark">
          <a class="navbar-brand" href="#">
              <img
              src="https://cdn.glitch.global/a22d3a6f-59c6-4e51-90aa-5984ac3f2b2c/rsz_whatsapp_image_2023-08-27_at_52553_pm.png?v=1693525229523" />
          </a>
          <ul class="nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Acercad.html">Acerca de</a>
            </li>
          </ul>
        </nav>
    </header>
    <section class="form-register text-center">
        <h4>Formulario de registro</h4>
        <form action="conexion.php" method="post">
          <input class="controls" type="number" name="id" id="id" placeholder="Ingrese su id">
          <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre">
          <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su apellido">
          <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su correo electronico">
          <p>Estoy de acuerdo con <a href="#">Términos y Condiciones</a></p>
          <button type="submit" class="btn btn-primary" name="enviar">Registrar</button>
          <button type="submit" class="btn btn-primary" name="eliminar">Eliminar</button>
          <p><a href="#">¿Ya tienes cuenta?</a></p>
        </form>
    </section>
    <section class="form-register">
      <div class="text-center">
          <table class="table table-success table-striped">
            <thead>
              <th>Id</th>
              <th>Nombre</th>
              <th>Apellidos</th>
              <th>Correo</th>
            </thead>
            <tbody>
              <?php $conex = new PDO("mysql:host=localhost;dbname=registro","ivan","futbol10");
              $sql = "select id, nombre, apellido, correo FROM clientes";
              $dato = $conex->prepare($sql);
              $dato-> setFetchMode(PDO::FETCH_ASSOC);
              $dato-> execute();
              if(isset($dato)){
                while($row=$dato->fetch()){
              
               ?> 
               <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['nombre']; ?></td>
                  <td><?php echo $row['apellido']; ?></td>
                  <td><?php echo $row['correo']; ?></td>
                </tr>
                <?php }}?>
            </tbody>
          </table>
      </div>
    </section>
  </body>
</html>
