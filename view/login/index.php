<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <script type="text/javascript" src="jquery.js"></script>
    <link rel="icon" href="../../favicon.ico">
    <!--Pulling Awesome Font -->
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <title>Resolución - 2175</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug 
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
    <link href="../css/login.css" rel="stylesheet">
    

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript">
$(document).ready(function(){
  
   $("#login").click(function(){
        username=$("#user_name").val();
        password=$("#password").val();
        ips=$("#ips").val();
         $.ajax({
            type: "POST",
            url: "login.php",
            data: "username="+username+"&password="+password+"&ips="+ips,


            success: function(html){
              console.log(html);
              if(html=='true')
              {
                console.log("entro a direccionar");
                document.location.href='../captura.php';
                /*$("#login_form").fadeOut("normal");
                $("#shadow").fadeOut();
                $("#profile").html("<a href='logout.php' class='red' id='logout'>Logout</a>");*/
                // You can redirect to other page here....
              }
              else
              {
                    $("#add_err").html("Wrong username or password");
              }
            },
            beforeSend:function()
            {
                 $("#add_err").html("Loading...")
            }
        });
         return false;
    });
});
</script>
  </head>

  <body>

    <?php session_start(); ?>
    <div id="profile">
    <?php
      if(isset($_SESSION['user_name'])){
      ?>
      <a href='logout.php'>Logout</a>
    <?php } ?>
    </div>
  </body>


  <?php 
  if(empty($_SESSION['user_name'])){
  ?>

   <div class="container">

     <div class="form-group" align="center"> 
          <!--<img src="../images/header.jpg" class="img-responsive" alt="Imagen responsive">-->
     </div>   
      <div class="col-md-offset-6 col-md-3">     
       <form class="form-signin">
          
            <div style="background-color:#356AA0;height: 40px; text-align: center;"><font face="Arial" color="white" size=4></span>Ingreso al sistema</font></div>
          
          <div class="panel panel-default">
              <div class="panel-heading">
                                     
                  <div class="form-group">
                      <label for="inputEmail" class="sr-only">Nombre Usuario</label>
                      <input type="input" name="user_name" id="user_name" class="form-control" placeholder="Usuario" required autofocus>
                  </div>
                  <div class="form-group">    
                      <label for="inputPassword" class="sr-only">Password</label>
                      <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" required>
                  </div> 

                  <!--<div class="form-group">
                    <label>Centro de Salud</label>
                    <select name="ips" class="form-control" id="ips">
                        <option value="">Seleccione</option>
                        <option value="1">Costa Hermosa</option>
                        <option value="2">13 De Junio</option>
                        <option value="3">Ciudadela Metropolitana</option>
                        <option value="4">Salamanca</option>
                        <option value="5">Manuela Beltran</option>
                        <option value="6">Villa Estadio</option>
                        <option value="7">La Esperanza</option>
                        <option value="8">El Parque</option>
                    </select>
                  </div> -->                  
                      
                  <div class="err" id="add_err"></div>
                  <button class="btn btn-primary btn-md" type="submit" id="login">Login</button>
            </div>
          </div>            
        </form>
      

    </div> <!-- /container -->


     <!--<div class="container">
        <div class="row">
            <div class="col-md-offset-5 col-md-3">
              <form>
                <div class="form-login">
                <h4>Welcome back.</h4>
                <input type="text" id="user_name" class="form-control input-sm chat-input" placeholder="username" />
                </br>
                <input type="text" id="password" class="form-control input-sm chat-input" placeholder="password" />
                </br>
                <div class="wrapper">
                <span class="group-btn">     
                    <a href="#" class="btn btn-primary btn-md" id="login">login <i class="fa fa-sign-in"></i></a>
                </span>
                </div>
                </div>
              </form>
            </div>
        </div>
      </div>-->

    <?php }?>
 
</html>
