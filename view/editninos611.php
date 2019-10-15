<?php
 include ("secure.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Resolución 2175</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        #map-canvas {
            height: 25.000em;
            width: 56.250em;
      }
    </style>

</head>
<body onload="getInfoNinos611(<?=$_GET['id']?>)">
     <div style="display:none"><div id="map-canvas"></div></div>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Resolución 2175</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?php echo $_SESSION['user_name'];?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> <?php echo $_SESSION['ips'];?></a>
                        </li>
                        
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    
                    <li class="active">
                        <a href="captura.php"><i class="fa fa-user-md"></i> Recien Nacido</a>
                    </li>
                    <li>
                        <a href="ninos05.php"><i class="fa fa-user-md"></i> Niños de 0 a 5 años</a>
                    </li>
                    <li>
                        <a href="ninos611.php"><i class="fa fa-user-md"></i> Niños de 6 a 11 años</a>
                    </li>
                    <li>
                        <a href="ninos1217.php"><i class="fa fa-user-md"></i> Niños de 12 a 17 años</a>
                    </li>
                    <li>
                        <a href="gestante.php"><i class="fa fa-user-md"></i> Mujeres gestantes</a>
                    </li>
                    <li>
                        <a href="parto.php"><i class="fa fa-user-md"></i> Atenciones del parto</a>
                    </li>

                    <li>
                        <a href="editarpersona.php"><i class="fa fa-cog"></i> Administrar Personas</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <!--<h1 class="page-header">
                            Resolución 2175
                        </h1>-->
                    </div>
                </div>
                <!-- /.row -->            
                <!-- /.row -->

                <hr>

                <div class="row">
                    <div class="col-lg-12">
                        <!--<h2>Recien Nacido</h2>-->
                        <div class="js-apply-validate" role="tabpanel">

                          <!-- Nav tabs -->
                          <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#general" aria-controls="general" role="tab" data-toggle="tab">Niños de 6 a 11 Años</a>
                            </li>                            
                            
                          </ul>

                           <!-- Tab panes -->
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="general">
                                <br>
                                <div class="row">
                                    <!--<form  action="guardar.php" method="POST">-->
                                        <form role="form" id="generalForm">
                                        <div class="col-lg-12">
                                            <div class="form-group col-lg-6">
                                                <label>Tipo Identificaci&oacute;n</label>
                                                <select name="tipoIdentificacion" class="form-control">
                                                    <option value="">Seleccione</option>
                                                    <option value="RC">Registro Cívil</option>
                                                    <option value="TI">Tarejta de Identidad</option>
                                                    <option value="PA">Pasaporte</option>
                                                </select>
                                            </div>                                       
                                            
                                            <div class="form-group col-lg-6">
                                                <label>No.Identificaci&oacute;n</label>
                                                <input name="numero" class="form-control" placeholder="N&uacute;mero de Identificacion">
                                            </div> 

                                            
                                            <div class="form-group col-lg-6">
                                                <label>Fecha de Nacimiento</label>
                                                <input type="date" id="fechaNacimiento" name="fechaNacimiento" class="form-control" placeholder="Fecha de nacimiento" >
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Sexo</label>
                                                <select name="sexo" class="form-control">
                                                    <option value="">Seleccione</option>
                                                    <option value="H">Hombre</option>
                                                    <option value="M">Mujer</option>                                                    
                                                </select>
                                            </div>                                                                                            
                                        </div> 
                                        <div class="col-lg-12">
                                            <div class="form-group col-lg-6">
                                                <label>Primer Nombre</label>
                                                <input name="primerNombre" class="form-control js-vfield js-vstring" placeholder="Primer Nombre">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Segundo Nombre</label>
                                                <input name="segundoNombre" class="form-control js-vfield js-vstring" placeholder="Segundo Nombre">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group col-lg-6">
                                                <label>Primer Apellido</label>
                                                <input name="primerApellido" class="form-control js-vfield js-vstring" placeholder="Primer Apellido">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Segundo Apellido</label>
                                                <input name="segundoApellido" class="form-control js-vfield js-vstring" placeholder="Segundo Apellido">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group col-lg-6">
                                                <label>Etnia</label>
                                                <select name="etnia" class="form-control">
                                                    <option value="">Seleccione</option>
                                                    <option value="1">Indigena</option>
                                                    <option value="2">ROM (Gitano)</option>
                                                    <option value="3">Raizal</option>
                                                    <option value="4">Palenquero</option>
                                                    <option value="5">Negro</option>
                                                    <option value="6">Ninguna de las anteriores</option>                                                    
                                                </select>
                                            </div>  
                                             <div class="form-group col-lg-6">
                                                <label>Fecha de Atención</label>
                                                <input type="date" id="fechaAtencion" name="fechaAtencion" class="form-control" placeholder="Fecha de nacimiento" >
                                            </div>       
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group col-lg-6">
                                                <label>Finalidad de la consulta</label>
                                                <select name="finalidad" class="form-control">
                                                    <option value="">Seleccione</option>
                                                    <option value="04"> Detección de alteraciones de crecimiento y desarrollo</option>
                                                </select>
                                            </div> 
                                            <div class="form-group col-lg-6">
                                                <label>Código CUPS del procedimiento</label>
                                                <select name="cups" class="form-control">
                                                    <option value="">Seleccione</option>
                                                    <option value="890201"> Consulta de primera vez por medicina general</option>
                                                    <option value="890205"> Consulta de primera vez por enfermería</option>
                                                    <option value="890301"> Consulta de control o de seguimiento por medicina general </option>           
                                                    <option value="890305"> Consulta de control o de seguimiento por enfermería  </option>           
                                                </select>
                                            </div>                                            
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group col-lg-6">
                                                <label>Peso</label>
                                                <input name="peso" class="form-control js-vfield js-vstring" placeholder="Peso">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Talla</label>
                                                <input name="talla" class="form-control js-vfield js-vstring" placeholder="Talla">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12">                                            
                                            <div class="form-group col-lg-6">
                                                <label>Fecha de toma de Hemoglobina</label>
                                                <input type="date" id="fechaHemo" name="fechaHemo" class="form-control" placeholder="" >
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Resultado Hemoglobina</label>
                                                <input name="hemo" class="form-control js-vfield js-vstring" placeholder="Peso">
                                            </div>          
                                        </div>
                                        

                                        <input type="hidden" name="codigo" id="codigo" value="<?php echo $_GET['id'];?>" />
                                         
                                        <!--<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Enviar">-->                                       
                                    </form>

                                </div>
                            </div>
                        <hr>
                        <div class="col-xs-12" style="margin-bottom: 10px">
                            <button id="save" type="button" class="btn btn-default" aria-label="Left Align">
                              <span style="font-size: 18px" class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Guardar 
                            </button>

                        </div>
                        

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
     <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!--<script src="js/logicalValidator.js"></script>-->
    <script src="js/main.js"></script>

     <script>        
        $(document).ready(function(){            
            loadRecienSelects();
            //loadRecienSelects();
            $("#save").click(function(){
              /* Change param of fnsubmit(param) to true to disable alert */
              //if(FNLOGIC.fnsubmit(false)){
                guardarNinosDe611('updateninos611');
              //}else{
                /* ERROR */
              //};
            });
        });
    </script>    

    </body>

</html>    
