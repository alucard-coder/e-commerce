<?php 
  echo <<<_END
  <style type="text/css">
         body{
         background-image: url(img/fondo1.jpg);
         padding: 0px;
         margin: 0px;
         }
         h1 ,h2{
          font-family:'Roboto Slab', sans-serif;
          font-size: 1.5em;
          font-weight: 100;
          margin-bottom: 50px;
          text-align: center;
          }
        .wbox{
        position: relative;
        margin: 0 auto;
        border-radius: 0.5em;
        background: white;
        padding: 3em;
        margin-bottom:50px;
        width: 350px;
        }
        input.button.blue, a.btn-blue {
          background: #0392cd;
          border-bottom: 3px solid #006e9c;
          }
          input.button, a.btn-blue {
          min-width: 70px;
          text-decoration: none;
          text-align: center;
          border-radius: 3px;
          color: white;
          font-size: 12px;
          font-family: 'Roboto Slab', sans-serif;
          font-weight: 300;
          font-size: 1.1em;
          padding: 10px 25px;
          border: 0;
          }
          a.pink {
            color: #e34197;
            text-decoration: none;
            }
          </style>
  <body>
  <div class="wbox" style="margin-top: 50px">
  <h1>Bienvenido</h1>
  <h2>Inicie Sesión</h2>
  <form action="signin.php" method="post"><pre>
  <div style="margin-top: 50px; font-size: 0.9em; color: #303e49;">
  <center><input class="button blue" type="submit" value="Login" ></center>
  </div>
  </form>
  <br>
        <span class="black">Don't have an account?</span>
         <a class="pink" rel="nofollow" href="registrar.php">sign Up now!</a>
         <br class="clear">  
  </div>
  </div>
  _END;
?>
