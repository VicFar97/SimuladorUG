<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">


    <link rel="stylesheet"   href="../css/style.css">
    <link rel="shortcut icon" href="img/icono_Image.jpg" type="image/x-icon">
    <title>Universidad de Guayaquil: Iniciar sesión en el sitio</title>
  </head>

  <body class="mx-auto py-0 fixed-top">

    
    <div class="row justify-content-center">
        <div class="col-xl-6 col-sm-8 ">
            <div class="card mx-3" style="margin-top: 65px; margin-bottom: 25px;">
                <div class="card-block">
                    <h2 class="card-header text-center" ><img src="https://campusvirtual.ug.edu.ec/pluginfile.php/1/core_admin/logo/0x200/1616267892/icono_Image.jpg" class="img-fluid" title="Universidad de Guayaquil" alt="Universidad de Guayaquil"/>
                    </h2>

                        <div class="card-body">
                        
                            <div class="row justify-content-md-center">
                                
                                <div class="col-md-5 ">
                                    <form class="mt-3" action="inicio.php" method="post" id="login">
                                        <div class="form-group">
                                            <label for="username" class="sr-only">Nombre de usuario</label>
                                            <input type="text" name="username" id="username"
                                                class="form-control"
                                                value=""
                                                placeholder="Nombre de usuario"
                                                autocomplete="username">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="password" class="sr-only">Contraseña</label>
                                            <input type="password" name="password" id="password" value=""
                                                class="form-control"
                                                placeholder="Contraseña"
                                                autocomplete="current-password">
                                        </div>
                                        <div class="rememberpass mt-3">
                                            <input type="checkbox" name="rememberusername" id="rememberusername" value="1"  />
                                            <label for="rememberusername">Recordar nombre de usuario</label>
                                        </div>
                                        
                                        <input type="submit" class="btn btn-primary btn-block mt-3 w-100" value="Acceder">
                                    
                                    </form>
                                            
                                </div>
                                <div class="col-md-5 " id="info">
                                    <div class="forgetpass mt-3 text-info">
                                        <p><a style="text-decoration: none; "  href="https://campusvirtual.ug.edu.ec/login/forgot_password.php">¿Olvidó su nombre de usuario o contraseña?</a></p>
                                    </div>
                                
                                    <div class=" mt-3">
                                        <p>Las 'Cookies' deben estar habilitadas en su navegador <a href="index.html"><i class="fas fa-question-circle"></i></a></p>
                                    </div>
                                                    
                                </div>
                            </div>
                        </div>
                </div>          
            </div>
        </div> 
    </div>                  
    
    
    <footer id="page-footer" class="py-3 pb-5 text-light" style="background: #343a40;">
        <div class="container">
            <div id="course-footer"></div>
            <div class="logininfo">Usted no se ha identificado.</div>
            <div class="homelink"><a class="text-light" href="https://campusvirtual.ug.edu.ec/">Página Principal</a></div>
            <div class="tool_dataprivacy"><a class="text-light" href="https://campusvirtual.ug.edu.ec/admin/tool/dataprivacy/summary.php">Resumen de retención de datos</a></div>
            <a class="text-light" href="https://download.moodle.org/mobile?version=2020061503&amp;lang=es&amp;iosappid=633359593&amp;androidappid=com.moodle.moodlemobile">Descargar la app para dispositivos móviles</a>

        </div>

    </footer>

    <script src="https://campusvirtual.ug.edu.ec/lib/javascript.php/1613923404/lib/requirejs/require.min.js"></script>
      

    


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>