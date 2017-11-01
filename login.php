<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Inicio de sesión</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/more.js"></script>
    <script type="text/javascript" src="js/validacionDeCampos.js"></script>
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>
      <div class="container">
          <div  class="card card-container">
              <img class="profile-img-card" src="http://3.bp.blogspot.com/-yYBpAXPcB3s/Ut5cREshL8I/AAAAAAAAAFE/eAaVSSBHhJc/s1600/OpenBSD+Foundation+MPEx+Bitcoin.jpg?sz=120" alt="" />
               <!-- <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" /> -->
              <p id="profile-name" class="profile-name-card"></p>
                <form method="post" id="form1" class="form-signin">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="mail" id="inputMail" name="mail" class="form-control" placeholder="user@rootsecurity.team" autofocus>
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="P4$sw0rd">
                    <div id="remember" class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Recordar
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block btn-signin btn-entrar" type="submit">Entrar</button>
                </form><!-- /form -->
              <a href="#" class="forgot-password">
                  ¿Olvidaste tu contraseña?
              </a>
          </div><!-- /card-container -->
      </div><!-- /container -->

  </body>
</html>
