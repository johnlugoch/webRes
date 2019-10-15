<?php
 include ("secure.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="jquery.js"></script>
<link rel="stylesheet" href="styles.css" type="text/css" />
<title>Registrar Usuario</title>
<script type="text/javascript">

$(document).ready(function(){
	
   $("#login").click(function(){
		username=$("#user_name").val();
        password=$("#password").val();
        nombre=$("#nombre").val();

         $.ajax({
            type: "POST",
            url: "register.php",
            data: "username="+username+"&password="+password+"&nombre="+nombre,


            success: function(data){
			
              	
              	$("#add_err").html(data);

              	
            },
            beforeSend:function()
			{
                 $("#add_err").html("Loading...");
            }
        });
         return false;
    });
});


</script>


</head>
<body>

<?php 
if(empty($_SESSION['user_name'])){?>
<div class="container" id="login_form">
	<section id="content">
		<form action="register.php">
			<h1>Registrar</h1>
			<div>
				<input type="text" placeholder="Nombre y Apellido" required="" id="nombre"  name="nombre"/>
			</div>
			<div>
				<input type="text" placeholder="Usuario" required="" id="user_name"  name="user_name"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" id="password"  name="password"/>
			</div>
		        <div class="err" id="add_err"></div>		        
			<div>
					<input type="submit" value="Guardar" id="login"  />
				<!--<a href="#">Olvidaste tu password?</a>
				<a href="#">Registrar</a>-->
			</div>
		</form><!-- form -->
		<div class="button">
			
		</div><!-- button -->
	</section><!-- content -->
</div>
<?php }?>

</body>

</html>